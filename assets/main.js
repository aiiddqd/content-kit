
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
      source: 'meta',
      meta: 'ext-link-block-title',
    },
    extLink: {
      type: 'string',
      source: 'meta',
      meta: 'ext-link-block'
    },

  },

  edit: function(props) {

    return el('div', { className: props.className },
      el('p', {}, 'Укажите ссылку и т д'),
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
      }),
    );
  },

  save: function() {
    return null;

    // return el('span', {}, props.attributes.title);
    // return el('div', { className: props.className },
    //   el('span', {}, props.attributes.title),
    //   el('a', {}, props.attributes.title),
    // );
  },

  supports: {
    multiple: false,
  },

});
