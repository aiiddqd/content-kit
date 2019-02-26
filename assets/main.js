
var el = wp.element.createElement;
var registerBlockType = wp.blocks.registerBlockType;
var TextControl = wp.components.TextControl;
// var RichText = wp.editor.RichText;

registerBlockType('gb-u7/ext-link', {
  title: 'Ext Link',

  icon: 'admin-links',

  category: 'common',

  attributes: {

    title: {
      type: 'string',
      source: 'html',
      selector: 'span',
    },

    extLink: {
      type: 'string',
      source: 'meta',
      meta: 'ext-link-block'
    },

  },

  edit: function(props) {
    // var className = props.className;
    // var setAttributes = props.setAttributes;
    // var content = props.attributes.content;

    return el('div', { className: props.className },
      el(TextControl, {
        label: 'Ссылка / URL',
        value: props.attributes.extLink,
        onChange: function(value) {
          props.setAttributes({ extLink: value });
        },
      }),
      el(TextControl, {
        label: 'Название',
        value: props.attributes.title,
        onChange: function(value) {
          props.setAttributes({ title: value });
        },
      })
    );
  },

  save: function(props) {
    // return null;

    return el('div', { className: props.className },
      el('span', {}, props.attributes.title),
    );
    // return el('div', { className: props.className },
    //   el('span', {}, props.attributes.title),
    // );
  },

  supports: {
    multiple: false,
  },

});
