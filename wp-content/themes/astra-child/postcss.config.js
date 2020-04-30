module.exports = {
  plugins: [
    require('postcss-normalize')({
      forceImport: true
    }),
    require('postcss-momentum-scrolling')([
      'scroll',
      'auto'
    ]),
    require('autoprefixer')({
      grid: true
    }),
    require('csswring')({
      preserveHacks: true,
      removeAllComments: true
    })
  ]
};
