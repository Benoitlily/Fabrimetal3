<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Quote Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'https:&#x2F;&#x2F;benoitlily.github.io&#x2F;Fabrimetal3&#x2F;https:&#x2F;&#x2F;benoitlily.github.io&#x2F;Fabrimetal3&#x2F;',
    'to' => 'ghana@fabrimetal.net'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Message\' is required.'
    )
    ),
    'select' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'PRODUCTS',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'PRODUCTS\' is required.'
    )
    ),
    'file' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'Upload Your File',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Upload Your File\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>