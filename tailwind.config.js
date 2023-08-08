/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php"
  ],
  theme: {
    extend: {
        fontFamily: {
            'circular-book': ['CircularStd-Book', 'sans-serif'],
            'circular-book-italic': ['CircularStd-BookItalic', 'sans-serif'],
            'circular-medium': ['CircularStd-Medium', 'sans-serif'],
            'circular-medium-italic': ['CircularStd-MediumItalic', 'sans-serif'],
            'circular-bold': ['CircularStd-Bold', 'sans-serif'],
            'circular-bold-italic': ['CircularStd-BoldItalic', 'sans-serif'],
            'circular-light': ['CircularStd-Light', 'sans-serif'],
            'circular-light-italic': ['CircularStd-LightItalic', 'sans-serif'],
            'circular-black': ['CircularStd-Black', 'sans-serif'],
            'circular-black-italic': ['CircularStd-BlackItalic', 'sans-serif'],
        },
        boxShadow: {
            DEFAULT: '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
            '2sm': '0 25px 50px 3px rgba(0, 0, 0, 0.05), 0 1px 2px 0 rgba(0, 0, 0, 0.04)',
            sm: '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
            md: '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
            lg: '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
            xl: '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
            '2xl': '0 0px 40px 0px rgba(0, 0, 0, 0.1)',
            '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
            button: '0 0px 10px 1px rgba(0, 0, 0, 0.2), 0 0px 2px 0px rgba(0, 0, 0, 0.05)',
            fb: '0 2px 2px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
            ethmenu: '0 0px 5px 1px rgba(0, 0, 0, 0.1), 0 0px 2px 0px rgba(0, 0, 0, 0.05)',
            search: '0 0px 1px 1px rgba(0, 0, 0, 0.2), 0 0px 1px 0px rgba(0, 0, 0, 0.05)',
            card: '0 0px 10px 1px rgba(0, 0, 0, 0.06), 0 0px 2px 0px rgba(0, 0, 0, 0.05)',
            'box-shadow': 'rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px',
            featured: '0 0px 50px 1px rgba(0, 0, 0, 0.1), 0 0px 2px 0px rgba(0, 0, 0, 0.05)',
            navbar: '0px 5px 8.5px -4px rgba(120, 120, 120, 0.3)',
            inner: 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
            none: 'none',
            'neubrutalism-xs': '1px 1px 0px 0 rgba(0, 0, 0, 0.03)',
            'neubrutalism-sm': '2px 2px 0px 0 rgba(0, 0, 0, 0.03)',
            'neubrutalism-md': '4px 4px 0px 0 rgba(0, 0, 0, 0.03)',
            'neubrutalism-lg': '5px 5px 0px 0 rgba(0, 0, 0, 0.03)',
            'neubrutalism-xl': '6px 6px 0px 0 rgba(0, 0, 0, 0.03)',
          },
    },
    darkMode: 'class'
  },
  plugins: [
    require('flowbite/plugin'),
    require('@tailwindcss/forms'),
  ],
}

