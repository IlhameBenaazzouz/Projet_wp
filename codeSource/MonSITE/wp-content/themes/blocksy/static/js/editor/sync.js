import ctEvents from 'ct-events'
import { select, useSelect } from '@wordpress/data'
import { updateVariableInStyleTags } from 'customizer-sync-helpers'
import { getValueFromInput } from 'blocksy-options'
import { gutenbergVariables } from './variables'

import { dropIframeBodyTransition, revertIframeBodyTransition } from '../editor'

export const handleMetaboxValueChange = (optionId, optionValue) => {
	const atts = {
		...getValueFromInput(
			ct_editor_localizations.post_options,
			wp.data
				.select('core/editor')
				.getEditedPostAttribute('blocksy_meta') || {}
		),
		[optionId]: optionValue,
	}

	if (!gutenbergVariables[optionId]) {
		return
	}

	const groupedVariables = (
		Array.isArray(gutenbergVariables[optionId])
			? gutenbergVariables[optionId]
			: [gutenbergVariables[optionId]]
	).reduce(
		(acc, item) => {
			const key = item.selector.includes(`iframe[name="editor-canvas"]`)
				? 'backgroundVariables'
				: 'nonBackgroundVariables'

			return {
				...acc,

				[key]: [...acc[key], item],
			}
		},
		{
			backgroundVariables: [],
			nonBackgroundVariables: [],
		}
	)

	dropIframeBodyTransition()

	if (groupedVariables.backgroundVariables.length > 0) {
		const maybeStyle = document.querySelector(
			'#ct-main-editor-styles-inline-css'
		)

		if (maybeStyle) {
			updateVariableInStyleTags({
				variableDescriptor: groupedVariables.backgroundVariables,

				value: optionValue,
				fullValue: atts,
				tabletMQ: '(max-width: 800px)',
				mobileMQ: '(max-width: 370px)',

				cacheId: 'background',

				initialStyleTagsDescriptor: [{ style: maybeStyle }],
			})
		}
	}

	if (groupedVariables.nonBackgroundVariables.length > 0) {
		updateVariableInStyleTags({
			variableDescriptor: groupedVariables.nonBackgroundVariables,

			value: optionValue,
			fullValue: atts,
			tabletMQ: '(max-width: 800px)',
			mobileMQ: '(max-width: 370px)',

			cacheId: 'non-background',
			initialStyleTagsDescriptor: [
				{
					readStyles: () => {
						const settings = window.wp.data
							.select('core/editor')
							.getEditorSettings()
						const maybeBlocksyStyle = settings.styles.find(
							(s) => s.source === 'blocksy'
						)

						if (!maybeBlocksyStyle || !maybeBlocksyStyle.css) {
							return ''
						}

						return maybeBlocksyStyle.css
					},

					persistStyles: (newCss) => {
						const settings = window.wp.data
							.select('core/editor')
							.getEditorSettings()

						wp.data.dispatch('core/editor').updateEditorSettings({
							...settings,
							styles: settings.styles.map((s) => {
								if (s.source !== 'blocksy') {
									return s
								}

								return {
									...s,
									css: newCss,
								}
							}),
						})
					},
				},
			],
		})
	}

	revertIframeBodyTransition()
}
