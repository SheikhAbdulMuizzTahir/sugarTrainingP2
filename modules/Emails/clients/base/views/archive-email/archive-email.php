<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$viewdefs['Emails']['base']['view']['archive-email'] = array(
    'template' => 'record',
    'buttons' => array(
        array(
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'events' => array(
                'click' => 'button:cancel_button:click',
            ),
        ),
        array(
            'type' => 'button',
            'name' => 'archive_button',
            'label' => 'LBL_ARCHIVE',
            'css_class' => 'btn-primary',
        ),
        array(
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
        ),
    ),
    'panels' => array(
        array(
            'name' => 'panel_body',
            'label' => 'LBL_PANEL_2',
            'columns' => 1,
            'labels' => true,
            'labelsOnTop' => false,
            'placeholders' => true,
            'fields' => array(
                array(
                    'name' => 'date_sent',
                    'type' => 'datetimecombo',
                    'label' => 'LBL_DATE_SENT',
                    'span' => 12,
                    'required' => true,
                ),
                array(
                    'name' => 'from_address',
                    'type' => 'text',
                    'label' => 'LBL_FROM',
                    'span'  => 12,
                    'required' => true,
                ),
                array(
                    'name' => 'to_addresses',
                    'type' => 'recipients',
                    'label' => 'LBL_TO_ADDRS',
                    'span' => 12,
                    'required' => true,
                ),
                array(
                    'name' => 'cc_addresses',
                    'type' => 'recipients',
                    'label' => 'LBL_CC',
                    'span' => 12,
                ),
                array(
                    'name' => 'bcc_addresses',
                    'type' => 'recipients',
                    'label' => 'LBL_BCC',
                    'span' => 12,
                ),
                array(
                    'name' => 'name',
                    'label' => 'LBL_SUBJECT',
                    'span' => 12,
                    'required' => true,
                ),
                array(
                    'name' => 'description_html',
                    'type' => 'htmleditable_tinymce',
                    'dismiss_label' => true,
                    'span' => 12,
                    'fieldSelector' => 'archive_html_body',
                    'tinyConfig' => [
                        'toolbar' => 'code | bold italic underline strikethrough | alignleft aligncenter alignright ' .
                            'alignjustify | forecolor backcolor | fontfamily fontsize blocks | ' .
                            'cut copy paste pastetext | search searchreplace | bullist numlist | ' .
                            'outdent indent | ltr rtl | undo redo | link unlink anchor image | subscript ' .
                            'superscript | charmap | table | hr removeformat | insertdatetime | ' .
                            'sugarattachment sugarsignature sugartemplate',
                    ],
                ),
                array(
                    'name' => 'attachments_collection',
                    'type' => 'email-attachments',
                    'dismiss_label' => true,
                    'span' => 12,
                ),
            ),
        ),
        array(
            'name' => 'panel_hidden',
            'hide' => true,
            'columns' => 1,
            'labelsOnTop' => false,
            'placeholders' => true,
            'fields' => array(
                array(
                    'type' => 'teamset',
                    'name' => 'team_name',
                    'span' => 12,
                ),
                array(
                    'name' => 'parent_name',
                    'span' => 12,
                ),
                array(
                    'name' => 'assigned_user_name',
                    'type' => 'relate',
                    'span' => 12,
                ),
                array(
                    'name' => 'tag',
                    'span' => '12',
                ),
            ),
        ),
    ),
);
