/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php'
    ],
    theme: {
        extend: {
            fontFamily: {
                montserat: [
                    'Montserrat',
                ],
                playfair:[
                    'Playfair Display',
                ],
                frank:[
                    'Frank Ruhl Libre'
                ],
            },
            background:{
                'butCont': '#C58E00',
                'modal_bg_color': 'rgba(0, 0, 0, 0.5)',
            },
            backgroundImage:{
                'main-fon': "url(/public/images/imgBackground 1.png)",
                'hawaii': "url(/public/images/imgHawaii 1.png)",
                'form': "url(/public/images/imgForm 1.png)",
            },
            border:{
                'modal_border': '1px solid #888',
            },
            colors:{
                'grey': '#A4ABB9',
                'gold': '#C58E00',
                'opas-blue': '#6E88A1',
                'holder-blue': '#ACC0D1',
            },
            placeholder:{

            },
            fontSize:{
                '42': '2.625rem',
            },
            marginLeft:{
                'large': '122px',
            },
            margin:{
                'modal_window': '15% auto'
            },
            container: {
                center: true,
                padding: '2rem',
            },
            transition:{
                'modal_trans':'opacity 0.5s',
                'modal_content_trans': 'transform 0.5s',
            },
        },
    },
    plugins: [],
}
