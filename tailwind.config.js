/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.{php,html,mdx,md}',
    './**/*.{php,html,mdx,md}'
  ],
  safelist: [
    {
      pattern: /border-[^/]+$/,
      variants: [
        'hover',
        'focus',
      ,],
    },
    {pattern: /(bg|text|border)-./},

  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

