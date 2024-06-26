<?php
$allowed_blocks = array(
    'core/heading',
    'core/paragraph',
);

$template = array(
    array(
        'core/heading',
        array(
            'name' => 'heading',
            'type' => 'string',
            'default' => 'Heading',
            'label' => 'Heading Text',
        )
    ),
    array(
        'core/paragraph',
        array(
            'name' => 'paragraph',
            'type' => 'string',
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'label' => 'Paragraph Text',
        )
    )
);

?>

<InnerBlocks allowedBlocks="<?php echo esc_attr(json_encode($allowed_blocks)); ?>" template="<?php echo esc_attr(json_encode($template)); ?>" />