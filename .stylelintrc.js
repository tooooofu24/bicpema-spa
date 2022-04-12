module.exports = {
    root: true,
    extends: ['stylelint-config-standard', 'stylelint-config-prettier'],
    plugins: ['stylelint-order'],
    rules: {
      'custom-property-empty-line-before': null,
      'order/properties-alphabetical-order': true,
    },
}