wp.hooks.addFilter(
    'blocks.registerBlockType',
    'hi-roy/add-to-all',
    (settings, name) => {
        return { ...settings, attributes: { ...settings.attributes, roy: { type: 'string' } } };
    }
);