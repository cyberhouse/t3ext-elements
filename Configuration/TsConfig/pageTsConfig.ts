
mod.wizards.newContentElement.wizardItems.common.elements {
	tx_elements_tab {
		icon = ../typo3conf/ext/elements/Resources/Public/Icons/tabs.png
		title = LLL:EXT:elements/Resources/Private/Language/locallang_be.xml:wizard.tab.title
		description = LLL:EXT:elements/Resources/Private/Language/locallang_be.xml:wizard.tab.description
		tt_content_defValues {
			CType = elements_tab
		}
	}
	tx_elements_accordion {
		icon = ../typo3conf/ext/elements/Resources/Public/Icons/accordion.png
		title = LLL:EXT:elements/Resources/Private/Language/locallang_be.xml:wizard.accordion.title
		description = LLL:EXT:elements/Resources/Private/Language/locallang_be.xml:wizard.accordion.description
		tt_content_defValues {
			CType = elements_accordion
		}
	}
}
mod.wizards.newContentElement.wizardItems.common.show := addToList(tx_elements_tab,tx_elements_accordion)