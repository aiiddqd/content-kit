
var el = wp.element.createElement;
var registerBlockType = wp.blocks.registerBlockType;
var TextControl = wp.components.TextControl;


registerBlockType('gb-u7/ext-link', {
  title: 'Ext Link',

  icon: 'admin-links',

  category: 'common',

  attributes: {

    content: {
      type: 'string',
      source: 'html',
      selector: 'p',
    },

    blockValue: {
      type: 'string',
      source: 'meta',
      meta: 'ext-link-block'
    },

  },

  edit: function(props) {
    var className = props.className;
    var setAttributes = props.setAttributes;
    var content = props.attributes.content;

    function updateBlockValue(blockValue) {
      setAttributes({ blockValue });
    }

    return el(
      'div',
      { className: className },
      el(TextControl, {
        label: 'Ссылка / URL',
        value: props.attributes.blockValue,
        onChange: updateBlockValue
      })
    );
  },

  save: function() {
    return el('p', {}, 'Hello saved content.');
  },

});
