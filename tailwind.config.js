module.exports = {
	important: true,
	purge: [
	 './resources/**/*.blade.php',
	 './resources/**/*.js',
	 './resources/**/*.vue',
	],
	darkMode: false, // or 'media' or 'class'
	theme: {
        extend: {
            backgroundColor: {
                'lightblue-opacity': 'rgba(122,207,211,0.4)',
                'lightblue': '#7acfd3',
                'darkblue':'#13487a',
                'yellow':'#ebb523',
                'whitesmoke': '#F0F0F0',

            },
            borderColor: {
                'lightblue':'#7acfd3',
                'darkblue':'#13487a',
                'yellow':'#ebb523',
                'whitesmoke': '#F0F0F0',
            },
            fontSize: {
                '10pt': '10pt',
                '12pt': '12pt',
                '15pt': '15pt',
                '17pt': '17pt',
                '20pt': '20pt',
                '24pt': '24pt',
                '25pt': '25pt',
                '30pt': '30pt',
            },
            fontFamily: {
                'montserrat': ['Montserrat', 'Arial', 'sans-serif'],
                'poppins': ['Poppins', 'Arial', 'sans-serif'],
            },
            height: {
                'h-50-screen': '50vh',
            },
            minWidth: {
                '100px': '100px',
                '150px': '150px',
                '200px': '200px',
                '300px': '300px',
                '350px': '350px',
                '400px': '400px',
                '450px': '450px',
                '500px': '500px',
                '550px': '550px',
                '600px': '600px',
                '650px': '650px',
                '700px': '700px',
                '750px': '750px',
            },
            minHeight: {
                '100px': '100px',
                '150px': '150px',
                '200px': '200px',
                '350px': '350px',
                '400px': '400px',
                '450px': '450px',
                '500px': '500px',
                '550px': '550px',
                '600px': '600px',
                '650px': '650px',
                '700px': '700px',
                '750px': '750px',
            },
            margin: {
                'minus50': '-50px',
                'minus100': '-100px',
            },
            maxHeight: {
                '100px': '100px',
                '150px': '150px',
                '200px': '200px',
                '250px': '250px',
                '300px': '300px',
                '350px': '350px',
                '400px': '400px',
                '450px': '450px',
                '500px': '500px',
                '550px': '550px',
                '600px': '600px',
                '650px': '650px',
                '700px': '700px',
                '750px': '750px',
            },
            textColor: {
                'lightblue':'#7acfd3',
                'darkblue':'#13487a',
                'powderblue':'#bee2e7',
                'yellow':'#ebb523',
            },
        }
	},
	variants: {
        extend: {
            transitionProperty: ['hover', 'focus'],
        },
	},
	plugins: [
    ],
}
