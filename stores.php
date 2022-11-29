<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/common.css">
    <title>Магазины поблизости - Wolt</title>
</head>
<body>
    <?php  include "views/header.php"; ?>
    <main class="content-list align">
        <?php include "views/nav.php"; ?>
        <h1>Магазины поблизости</h1>
        <div class="slider">
            <div class="slider-head flex-row align">
                <h2>Категории</h2>
                <div class="slider-right">
                    <button class="next-prev-btn">
                        <svg viewBox="0 0 24 24"><path d="M22.533 10.526H5.422a.251.251 0 01-.165-.438l4.637-3.6a1.44 1.44 0 00-1.9-2.162L.813 10.165a2.4 2.4 0 000 3.6l7.179 5.837a1.44 1.44 0 001.9-2.161l-4.637-3.6a.251.251 0 01.165-.438h17.113a1.44 1.44 0 000-2.88v.003z"></path></svg>
                    </button>
                    <button class="next-prev-btn">
                        <svg viewBox="0 0 24 24"><path d="M1.40206 10.5258H18.5131C18.6167 10.5248 18.709 10.4602 18.7455 10.3633C18.7821 10.2663 18.7553 10.1569 18.6781 10.0878L14.0411 6.48776C13.4767 5.95564 13.4352 5.0721 13.9472 4.48944C14.4593 3.90679 15.3408 3.83442 15.9411 4.32576L23.1221 10.1648C23.6387 10.6204 23.9346 11.276 23.9346 11.9648C23.9346 12.6536 23.6387 13.3092 23.1221 13.7648L15.9431 19.6018C15.3426 20.0868 14.4665 20.0121 13.9568 19.4324C13.4471 18.8527 13.4852 17.9742 14.0431 17.4408L18.6801 13.8408C18.7572 13.7717 18.7841 13.6622 18.7475 13.5653C18.711 13.4683 18.6187 13.4038 18.5151 13.4028H1.40206C0.621817 13.3822 0 12.7438 0 11.9633C0 11.1828 0.621817 10.5443 1.40206 10.5238V10.5258Z"></path></svg>
                    </button>
                </div>
            </div>
            <div class="flex-row">
                <a href="#" class="category-card scalable">
                    <img src="https://imageproxy.wolt.com/wolt-frontpage-images/categories/bfd9a598-46ee-11ec-9121-0e9ac38cbb02_24769cd1_c20a_447a_812b_741ef61bffbe.webp-md?w=600" >
                    <div class="category-card-bottom">
                        <p>Продукты</p>
                        <p class="category-place-count">11 мест</p>
                    </div>
                </a>
                <a href="#" class="category-card scalable">
                    <img src="https://imageproxy.wolt.com/wolt-frontpage-images/categories/a0f2c09e-dda5-11ec-9763-eec63c6f9859_fc9971f6_8def_4d06_a691_7c82418ee1bc.png-md?w=600" >
                    <div class="category-card-bottom">
                        <p>Выпечка</p>
                        <p class="category-place-count">22 мест</p>
                    </div>
                </a>
                <a href="#" class="category-card scalable">
                    <img src="https://imageproxy.wolt.com/wolt-frontpage-images/categories/4c7b9e08-c5b7-11ea-a087-8a5eba4fdbce_04778292_1347_4802_91ed_50d71a0de773.jpg-md?w=600" >
                    <div class="category-card-bottom">
                        <p>Здоровье и Красота</p>
                        <p class="category-place-count">14 мест</p>
                    </div>
                </a>
                <a href="#" class="category-card scalable">
                    <img src="https://imageproxy.wolt.com/wolt-frontpage-images/categories/43da6aaa-4779-11ec-bda2-16dadda4b025_8536d8e7_98b3_48e7_a823_a9a281ffc642.jpg-md?w=600" >
                    <div class="category-card-bottom">
                        <p>Цветы</p>
                        <p class="category-place-count">20 мест</p>
                    </div>
                </a>
                <a href="#" class="category-card scalable">
                    <img src="https://imageproxy.wolt.com/wolt-frontpage-images/categories/1c8235cc-963f-11ec-b0da-eaa913c13874_587ff86c_ffe6_44ae_ad17_41fe06177667.jpg-md?w=600" >
                    <div class="category-card-bottom">
                        <p>Уход за волосами</p>
                        <p class="category-place-count">2 мест</p>
                    </div>
                </a>
                <a href="#" class="category-card scalable">
                    <img src="https://imageproxy.wolt.com/wolt-frontpage-images/categories/5c83ff60-8b3c-11ec-9dcc-9ae2c5d181aa_c30619f3_f924_4e09_9507_576f49845a6a.jpg-md?w=600" >
                    <div class="category-card-bottom">
                        <p>Сладкое</p>
                        <p class="category-place-count">22 мест</p>
                    </div>
                </a>
            </div>
            <h2>Все магазины</h2>
        </div>
        <div class="flex-row flex-wrap">
            <a href="#" class="slider-item scalable">
                <div class="card-category">
                    <p>Общие товары</p>
                </div>
                <img src="https://imageproxy.wolt.com/venue/6246e4800281ac641cb63566/abfcebd8-4892-11ed-b581-f697941f8f7c_flamingo.png?w=960">
                <div class="inner-item flex-row align">
                    <div class="flex-col">
                        <h4>FlaminGo Кажымукан</h4>
                        <p>Продукты, косметика, аптека - в одном магазине! 🦩</p>
                    </div>
                    <div class="delivery-time">
                        <p>35-45 мин.</p>
                    </div>
                </div>
                
                <div class="slider-bottom flex-row">
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.401 9.602C4.682 9.883 5.067 10.041 5.463 10.041H5.502C5.918 10.031 6.299 9.854 6.577 9.545L9.734 6.038C10.27 5.443 10.245 4.534 9.679 3.967L8.098 2.385C7.809 2.096 7.394 1.941 7 1.947C6.59 1.957 6.198 2.138 5.924 2.442L2.764 5.954C2.23 6.547 2.254 7.455 2.818 8.02L4.401 9.602ZM10.722 11.734L12.173 10.075C13.547 11.004 15.169 11.499 16.828 11.495H17.5C18.329 11.495 19 10.823 19 9.995C19 9.16599 18.329 8.495 17.5 8.495H16.828C15.416 8.49099 14.062 7.93 13.061 6.93399C12.774 6.62999 12.367 6.47 11.95 6.496C11.535 6.509 11.145 6.69499 10.871 7.007L7.371 11.007C6.827 11.632 6.891 12.58 7.516 13.123C7.565 13.166 7.617 13.206 7.671 13.243L8.335 13.685C10.123 14.89 10.994 17.063 10.535 19.169C10.338 19.974 10.83 20.787 11.635 20.984C12.44 21.181 13.252 20.688 13.449 19.883C13.454 19.863 13.459 19.841 13.463 19.82C14.115 16.825 13.061 13.714 10.722 11.734ZM22 18.495C22 17.114 20.881 15.995 19.5 15.995C18.119 15.995 17 17.114 17 18.495C17 19.875 18.119 20.995 19.5 20.995C20.881 20.995 22 19.875 22 18.495ZM24 18.495C24 20.98 21.985 22.995 19.5 22.995C17.015 22.995 15 20.98 15 18.495C15 16.009 17.015 13.995 19.5 13.995C21.985 13.995 24 16.009 24 18.495ZM7 18.495C7 17.114 5.881 15.995 4.5 15.995C3.119 15.995 2 17.114 2 18.495C2 19.875 3.119 20.995 4.5 20.995C5.881 20.995 7 19.875 7 18.495ZM9 18.495C9 20.98 6.985 22.995 4.5 22.995C2.015 22.995 0 20.98 0 18.495C0 16.009 2.015 13.995 4.5 13.995C6.985 13.995 9 16.009 9 18.495ZM12.125 3.995C12.125 2.683 13.189 1.62 14.5 1.62C15.812 1.62 16.875 2.683 16.875 3.995C16.875 5.30599 15.812 6.37 14.5 6.37C13.189 6.37 12.125 5.30599 12.125 3.995Z"></path>
                    </svg>
                    <p>480 KZT ₸₸₸₸</p>
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 22C6.5 22 2 17.5 2 12S6.5 2 12 2s10 4.5 10 10-4.5 10-10 10zm0-2.9c-2.2 0-4-1.4-4.4-3.5-.2-.7.1-1.1.8-1.1 2.5 0 5-.1 7.4.1.7 0 .8.2.7 1-.4 2.1-2.3 3.5-4.5 3.5zM5 9.8c.1-2 1.7-3.2 3.5-2.6 1.1.4 1.9 1.7 1.8 2.9-.1.4-.4.8-.8.8-.4.1-.8-.2-1-.7-.1-.2-.2-.5-.2-.7-.1-.3-.3-.6-.7-.6-.3 0-.5.3-.6.6-.1.2-.1.3-.1.5-.1.5-.5.9-1.1.8-.4 0-.8-.4-.8-1zm8.7 0c.1-2 1.8-3.2 3.5-2.5 1.1.4 1.9 1.7 1.7 2.9-.1.4-.4.8-.9.8-.4 0-.8-.3-1-.7 0-.3 0-.6-.1-.9-.1-.2-.3-.4-.6-.4s-.5.2-.6.5c-.1.2-.1.4-.1.6-.1.6-.5 1-1.1.9-.6-.2-.9-.6-.8-1.2z" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                    </svg>
                    <p>9.2</p>
                </div>
            </a>
            <a href="#" class="slider-item scalable">
                <div class="card-category">
                    <p>Красота и здоровье</p>
                </div>
                <img src="https://imageproxy.wolt.com/venue/62fe03c1a759714158d84cfd/825f6868-242b-11ed-9368-ae3efa320607_img_8786.jpg?w=960">
                <div class="inner-item flex-row align">
                    <div class="flex-col">
                        <h4>LoookWell</h4>
                        <p>Уходовая косметика для тебя ✨</p>
                    </div>
                    <div class="delivery-time">
                        <p>50-60 мин.</p>
                    </div>
                </div>
                
                <div class="slider-bottom flex-row">
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.401 9.602C4.682 9.883 5.067 10.041 5.463 10.041H5.502C5.918 10.031 6.299 9.854 6.577 9.545L9.734 6.038C10.27 5.443 10.245 4.534 9.679 3.967L8.098 2.385C7.809 2.096 7.394 1.941 7 1.947C6.59 1.957 6.198 2.138 5.924 2.442L2.764 5.954C2.23 6.547 2.254 7.455 2.818 8.02L4.401 9.602ZM10.722 11.734L12.173 10.075C13.547 11.004 15.169 11.499 16.828 11.495H17.5C18.329 11.495 19 10.823 19 9.995C19 9.16599 18.329 8.495 17.5 8.495H16.828C15.416 8.49099 14.062 7.93 13.061 6.93399C12.774 6.62999 12.367 6.47 11.95 6.496C11.535 6.509 11.145 6.69499 10.871 7.007L7.371 11.007C6.827 11.632 6.891 12.58 7.516 13.123C7.565 13.166 7.617 13.206 7.671 13.243L8.335 13.685C10.123 14.89 10.994 17.063 10.535 19.169C10.338 19.974 10.83 20.787 11.635 20.984C12.44 21.181 13.252 20.688 13.449 19.883C13.454 19.863 13.459 19.841 13.463 19.82C14.115 16.825 13.061 13.714 10.722 11.734ZM22 18.495C22 17.114 20.881 15.995 19.5 15.995C18.119 15.995 17 17.114 17 18.495C17 19.875 18.119 20.995 19.5 20.995C20.881 20.995 22 19.875 22 18.495ZM24 18.495C24 20.98 21.985 22.995 19.5 22.995C17.015 22.995 15 20.98 15 18.495C15 16.009 17.015 13.995 19.5 13.995C21.985 13.995 24 16.009 24 18.495ZM7 18.495C7 17.114 5.881 15.995 4.5 15.995C3.119 15.995 2 17.114 2 18.495C2 19.875 3.119 20.995 4.5 20.995C5.881 20.995 7 19.875 7 18.495ZM9 18.495C9 20.98 6.985 22.995 4.5 22.995C2.015 22.995 0 20.98 0 18.495C0 16.009 2.015 13.995 4.5 13.995C6.985 13.995 9 16.009 9 18.495ZM12.125 3.995C12.125 2.683 13.189 1.62 14.5 1.62C15.812 1.62 16.875 2.683 16.875 3.995C16.875 5.30599 15.812 6.37 14.5 6.37C13.189 6.37 12.125 5.30599 12.125 3.995Z"></path>
                    </svg>
                    <p>480 KZT ₸₸₸₸</p>
                    <svg version="1.1" id="Layer_1" x="0" y="0" viewBox="0 0 40 40" class="svg-small"><circle cx="20" cy="20" r="20" fill="#fda80d"></circle>
                        <path fill="#222225" d="M20 31.9c-3.6 0-6.6-2.3-7.4-5.8-.3-1.1.2-1.8 1.4-1.8 4.1 0 8.3-.1 12.4.1 1.2 0 1.4.4 1.2 1.6-.7 3.5-3.9 5.9-7.6 5.9zM8.4 16.4c.1-3.3 2.9-5.3 5.8-4.4 1.8.6 3.2 2.9 3 4.8-.1.7-.7 1.3-1.4 1.3-.7.1-1.4-.4-1.7-1.1l-.3-1.2c-.2-.5-.5-.9-1.1-.9s-.9.4-1.1 1c-.1.3-.1.5-.1.8-.2.9-.9 1.5-1.8 1.4-.7-.1-1.3-.8-1.3-1.7zM22.8 16.3c.2-3.3 3-5.3 5.9-4.2 1.8.6 3.2 2.9 2.9 4.8-.1.7-.7 1.3-1.5 1.3-.7 0-1.4-.5-1.6-1.2-.1-.4-.2-.9-.3-1.3-.2-.4-.5-.7-1-.7s-.8.3-1 .8c-.1.3-.1.6-.2 1-.2 1-.9 1.6-1.8 1.5-1-.3-1.5-1-1.4-2z"></path>
                    </svg>
                    <p>9.6</p>
                </div>
            </a>
            <a href="#" class="slider-item scalable">
                <div class="card-category">
                    <p>Цветы</p>
                </div>
                <img src="https://imageproxy.wolt.com/venue/6299f8406140b63cd8dfecd4/94e82e2c-e7ac-11ec-a5bc-0a15ada810fb_img_1613.jpg?w=960">
                <div class="inner-item flex-row align">
                    <div class="flex-col">
                        <h4>Sunday Flowers Сатпаева</h4>
                        <p>Цветочная студия 💐🌻</p>
                    </div>
                    <div class="delivery-time">
                        <p>45-55 мин.</p>
                    </div>
                </div>
                
                <div class="slider-bottom flex-row">
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.401 9.602C4.682 9.883 5.067 10.041 5.463 10.041H5.502C5.918 10.031 6.299 9.854 6.577 9.545L9.734 6.038C10.27 5.443 10.245 4.534 9.679 3.967L8.098 2.385C7.809 2.096 7.394 1.941 7 1.947C6.59 1.957 6.198 2.138 5.924 2.442L2.764 5.954C2.23 6.547 2.254 7.455 2.818 8.02L4.401 9.602ZM10.722 11.734L12.173 10.075C13.547 11.004 15.169 11.499 16.828 11.495H17.5C18.329 11.495 19 10.823 19 9.995C19 9.16599 18.329 8.495 17.5 8.495H16.828C15.416 8.49099 14.062 7.93 13.061 6.93399C12.774 6.62999 12.367 6.47 11.95 6.496C11.535 6.509 11.145 6.69499 10.871 7.007L7.371 11.007C6.827 11.632 6.891 12.58 7.516 13.123C7.565 13.166 7.617 13.206 7.671 13.243L8.335 13.685C10.123 14.89 10.994 17.063 10.535 19.169C10.338 19.974 10.83 20.787 11.635 20.984C12.44 21.181 13.252 20.688 13.449 19.883C13.454 19.863 13.459 19.841 13.463 19.82C14.115 16.825 13.061 13.714 10.722 11.734ZM22 18.495C22 17.114 20.881 15.995 19.5 15.995C18.119 15.995 17 17.114 17 18.495C17 19.875 18.119 20.995 19.5 20.995C20.881 20.995 22 19.875 22 18.495ZM24 18.495C24 20.98 21.985 22.995 19.5 22.995C17.015 22.995 15 20.98 15 18.495C15 16.009 17.015 13.995 19.5 13.995C21.985 13.995 24 16.009 24 18.495ZM7 18.495C7 17.114 5.881 15.995 4.5 15.995C3.119 15.995 2 17.114 2 18.495C2 19.875 3.119 20.995 4.5 20.995C5.881 20.995 7 19.875 7 18.495ZM9 18.495C9 20.98 6.985 22.995 4.5 22.995C2.015 22.995 0 20.98 0 18.495C0 16.009 2.015 13.995 4.5 13.995C6.985 13.995 9 16.009 9 18.495ZM12.125 3.995C12.125 2.683 13.189 1.62 14.5 1.62C15.812 1.62 16.875 2.683 16.875 3.995C16.875 5.30599 15.812 6.37 14.5 6.37C13.189 6.37 12.125 5.30599 12.125 3.995Z"></path>
                    </svg>
                    <p>960 KZT ₸₸₸₸</p>
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 22C6.5 22 2 17.5 2 12S6.5 2 12 2s10 4.5 10 10-4.5 10-10 10zm0-2.9c-2.2 0-4-1.4-4.4-3.5-.2-.7.1-1.1.8-1.1 2.5 0 5-.1 7.4.1.7 0 .8.2.7 1-.4 2.1-2.3 3.5-4.5 3.5zM5 9.8c.1-2 1.7-3.2 3.5-2.6 1.1.4 1.9 1.7 1.8 2.9-.1.4-.4.8-.8.8-.4.1-.8-.2-1-.7-.1-.2-.2-.5-.2-.7-.1-.3-.3-.6-.7-.6-.3 0-.5.3-.6.6-.1.2-.1.3-.1.5-.1.5-.5.9-1.1.8-.4 0-.8-.4-.8-1zm8.7 0c.1-2 1.8-3.2 3.5-2.5 1.1.4 1.9 1.7 1.7 2.9-.1.4-.4.8-.9.8-.4 0-.8-.3-1-.7 0-.3 0-.6-.1-.9-.1-.2-.3-.4-.6-.4s-.5.2-.6.5c-.1.2-.1.4-.1.6-.1.6-.5 1-1.1.9-.6-.2-.9-.6-.8-1.2z" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                    </svg>
                    <p>9.6</p>
                </div>
            </a>
            <a href="store.html" class="slider-item scalable">
                <div class="card-category">
                    <p>Продукты</p>
                </div>
                <img src="https://imageproxy.wolt.com/venue/5de4d035bf0be245c653237f/ca600b14-4892-11ed-82f7-f630c6eac4d0_gastromarket_colibri.jpg?w=960">
                <div class="inner-item flex-row align">
                    <div class="flex-col">
                        <h4>Гастромаркет Colibri</h4>
                        <p>В Colibri вы найдёте всё необходимое на все случаи жизни. 🏠</p>
                    </div>
                    <div class="delivery-time">
                        <p>45-55 мин.</p>
                    </div>
                </div>
                <div class="slider-bottom flex-row">
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.401 9.602C4.682 9.883 5.067 10.041 5.463 10.041H5.502C5.918 10.031 6.299 9.854 6.577 9.545L9.734 6.038C10.27 5.443 10.245 4.534 9.679 3.967L8.098 2.385C7.809 2.096 7.394 1.941 7 1.947C6.59 1.957 6.198 2.138 5.924 2.442L2.764 5.954C2.23 6.547 2.254 7.455 2.818 8.02L4.401 9.602ZM10.722 11.734L12.173 10.075C13.547 11.004 15.169 11.499 16.828 11.495H17.5C18.329 11.495 19 10.823 19 9.995C19 9.16599 18.329 8.495 17.5 8.495H16.828C15.416 8.49099 14.062 7.93 13.061 6.93399C12.774 6.62999 12.367 6.47 11.95 6.496C11.535 6.509 11.145 6.69499 10.871 7.007L7.371 11.007C6.827 11.632 6.891 12.58 7.516 13.123C7.565 13.166 7.617 13.206 7.671 13.243L8.335 13.685C10.123 14.89 10.994 17.063 10.535 19.169C10.338 19.974 10.83 20.787 11.635 20.984C12.44 21.181 13.252 20.688 13.449 19.883C13.454 19.863 13.459 19.841 13.463 19.82C14.115 16.825 13.061 13.714 10.722 11.734ZM22 18.495C22 17.114 20.881 15.995 19.5 15.995C18.119 15.995 17 17.114 17 18.495C17 19.875 18.119 20.995 19.5 20.995C20.881 20.995 22 19.875 22 18.495ZM24 18.495C24 20.98 21.985 22.995 19.5 22.995C17.015 22.995 15 20.98 15 18.495C15 16.009 17.015 13.995 19.5 13.995C21.985 13.995 24 16.009 24 18.495ZM7 18.495C7 17.114 5.881 15.995 4.5 15.995C3.119 15.995 2 17.114 2 18.495C2 19.875 3.119 20.995 4.5 20.995C5.881 20.995 7 19.875 7 18.495ZM9 18.495C9 20.98 6.985 22.995 4.5 22.995C2.015 22.995 0 20.98 0 18.495C0 16.009 2.015 13.995 4.5 13.995C6.985 13.995 9 16.009 9 18.495ZM12.125 3.995C12.125 2.683 13.189 1.62 14.5 1.62C15.812 1.62 16.875 2.683 16.875 3.995C16.875 5.30599 15.812 6.37 14.5 6.37C13.189 6.37 12.125 5.30599 12.125 3.995Z"></path>
                    </svg>
                    <p>610 KZT ₸₸₸₸</p>
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 22C6.5 22 2 17.5 2 12S6.5 2 12 2s10 4.5 10 10-4.5 10-10 10zm0-2.9c-2.2 0-4-1.4-4.4-3.5-.2-.7.1-1.1.8-1.1 2.5 0 5-.1 7.4.1.7 0 .8.2.7 1-.4 2.1-2.3 3.5-4.5 3.5zM5 9.8c.1-2 1.7-3.2 3.5-2.6 1.1.4 1.9 1.7 1.8 2.9-.1.4-.4.8-.8.8-.4.1-.8-.2-1-.7-.1-.2-.2-.5-.2-.7-.1-.3-.3-.6-.7-.6-.3 0-.5.3-.6.6-.1.2-.1.3-.1.5-.1.5-.5.9-1.1.8-.4 0-.8-.4-.8-1zm8.7 0c.1-2 1.8-3.2 3.5-2.5 1.1.4 1.9 1.7 1.7 2.9-.1.4-.4.8-.9.8-.4 0-.8-.3-1-.7 0-.3 0-.6-.1-.9-.1-.2-.3-.4-.6-.4s-.5.2-.6.5c-.1.2-.1.4-.1.6-.1.6-.5 1-1.1.9-.6-.2-.9-.6-.8-1.2z" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                    </svg>
                    <p>8.6</p>
                </div>
            </a>
            <a href="#" class="slider-item scalable">
                <div class="card-category">
                    <p>Мясо и рыба</p>
                </div>
                <img src="https://imageproxy.wolt.com/venue/623d961fa073b118d2face1a/fa44928c-4892-11ed-9523-8a21d0e2f88e_bekker_k_rozybakiyev.jpg?w=960">
                <div class="inner-item flex-row align">
                    <div class="flex-col">
                        <h4>Беккер и К Розыбакиев</h4>
                        <p>Качественные и экологически чистые продукты, проверенные временем! </p>
                    </div>
                    <div class="delivery-time">
                        <p>35-40 мин.</p>
                    </div>
                </div>
                <div class="slider-bottom flex-row">
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.401 9.602C4.682 9.883 5.067 10.041 5.463 10.041H5.502C5.918 10.031 6.299 9.854 6.577 9.545L9.734 6.038C10.27 5.443 10.245 4.534 9.679 3.967L8.098 2.385C7.809 2.096 7.394 1.941 7 1.947C6.59 1.957 6.198 2.138 5.924 2.442L2.764 5.954C2.23 6.547 2.254 7.455 2.818 8.02L4.401 9.602ZM10.722 11.734L12.173 10.075C13.547 11.004 15.169 11.499 16.828 11.495H17.5C18.329 11.495 19 10.823 19 9.995C19 9.16599 18.329 8.495 17.5 8.495H16.828C15.416 8.49099 14.062 7.93 13.061 6.93399C12.774 6.62999 12.367 6.47 11.95 6.496C11.535 6.509 11.145 6.69499 10.871 7.007L7.371 11.007C6.827 11.632 6.891 12.58 7.516 13.123C7.565 13.166 7.617 13.206 7.671 13.243L8.335 13.685C10.123 14.89 10.994 17.063 10.535 19.169C10.338 19.974 10.83 20.787 11.635 20.984C12.44 21.181 13.252 20.688 13.449 19.883C13.454 19.863 13.459 19.841 13.463 19.82C14.115 16.825 13.061 13.714 10.722 11.734ZM22 18.495C22 17.114 20.881 15.995 19.5 15.995C18.119 15.995 17 17.114 17 18.495C17 19.875 18.119 20.995 19.5 20.995C20.881 20.995 22 19.875 22 18.495ZM24 18.495C24 20.98 21.985 22.995 19.5 22.995C17.015 22.995 15 20.98 15 18.495C15 16.009 17.015 13.995 19.5 13.995C21.985 13.995 24 16.009 24 18.495ZM7 18.495C7 17.114 5.881 15.995 4.5 15.995C3.119 15.995 2 17.114 2 18.495C2 19.875 3.119 20.995 4.5 20.995C5.881 20.995 7 19.875 7 18.495ZM9 18.495C9 20.98 6.985 22.995 4.5 22.995C2.015 22.995 0 20.98 0 18.495C0 16.009 2.015 13.995 4.5 13.995C6.985 13.995 9 16.009 9 18.495ZM12.125 3.995C12.125 2.683 13.189 1.62 14.5 1.62C15.812 1.62 16.875 2.683 16.875 3.995C16.875 5.30599 15.812 6.37 14.5 6.37C13.189 6.37 12.125 5.30599 12.125 3.995Z"></path>
                    </svg>
                    <p>960 KZT ₸₸₸₸</p>
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 22C6.5 22 2 17.5 2 12S6.5 2 12 2s10 4.5 10 10-4.5 10-10 10zm0-2.9c-2.2 0-4-1.4-4.4-3.5-.2-.7.1-1.1.8-1.1 2.5 0 5-.1 7.4.1.7 0 .8.2.7 1-.4 2.1-2.3 3.5-4.5 3.5zM5 9.8c.1-2 1.7-3.2 3.5-2.6 1.1.4 1.9 1.7 1.8 2.9-.1.4-.4.8-.8.8-.4.1-.8-.2-1-.7-.1-.2-.2-.5-.2-.7-.1-.3-.3-.6-.7-.6-.3 0-.5.3-.6.6-.1.2-.1.3-.1.5-.1.5-.5.9-1.1.8-.4 0-.8-.4-.8-1zm8.7 0c.1-2 1.8-3.2 3.5-2.5 1.1.4 1.9 1.7 1.7 2.9-.1.4-.4.8-.9.8-.4 0-.8-.3-1-.7 0-.3 0-.6-.1-.9-.1-.2-.3-.4-.6-.4s-.5.2-.6.5c-.1.2-.1.4-.1.6-.1.6-.5 1-1.1.9-.6-.2-.9-.6-.8-1.2z" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                    </svg>
                    <p>9.2</p>
                </div>
            </a>
            <a href="#" class="slider-item scalable">
                <div class="card-category">
                    <p>Гастрономия</p>
                </div>
                <img src="https://imageproxy.wolt.com/venue/61a9f82f87b533962591f85b/57c79eaa-4892-11ed-8195-fe5b237fd649_esentai_gourmet__1_.png?w=960">
                <div class="inner-item flex-row align">
                    <div class="flex-col">
                        <h4>ESANTAI GOURMET</h4>
                        <p>Гастроном премиум-класса</p>
                    </div>
                    <div class="delivery-time">
                        <p>45-50 мин.</p>
                    </div>
                </div>
                <div class="slider-bottom flex-row">
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.401 9.602C4.682 9.883 5.067 10.041 5.463 10.041H5.502C5.918 10.031 6.299 9.854 6.577 9.545L9.734 6.038C10.27 5.443 10.245 4.534 9.679 3.967L8.098 2.385C7.809 2.096 7.394 1.941 7 1.947C6.59 1.957 6.198 2.138 5.924 2.442L2.764 5.954C2.23 6.547 2.254 7.455 2.818 8.02L4.401 9.602ZM10.722 11.734L12.173 10.075C13.547 11.004 15.169 11.499 16.828 11.495H17.5C18.329 11.495 19 10.823 19 9.995C19 9.16599 18.329 8.495 17.5 8.495H16.828C15.416 8.49099 14.062 7.93 13.061 6.93399C12.774 6.62999 12.367 6.47 11.95 6.496C11.535 6.509 11.145 6.69499 10.871 7.007L7.371 11.007C6.827 11.632 6.891 12.58 7.516 13.123C7.565 13.166 7.617 13.206 7.671 13.243L8.335 13.685C10.123 14.89 10.994 17.063 10.535 19.169C10.338 19.974 10.83 20.787 11.635 20.984C12.44 21.181 13.252 20.688 13.449 19.883C13.454 19.863 13.459 19.841 13.463 19.82C14.115 16.825 13.061 13.714 10.722 11.734ZM22 18.495C22 17.114 20.881 15.995 19.5 15.995C18.119 15.995 17 17.114 17 18.495C17 19.875 18.119 20.995 19.5 20.995C20.881 20.995 22 19.875 22 18.495ZM24 18.495C24 20.98 21.985 22.995 19.5 22.995C17.015 22.995 15 20.98 15 18.495C15 16.009 17.015 13.995 19.5 13.995C21.985 13.995 24 16.009 24 18.495ZM7 18.495C7 17.114 5.881 15.995 4.5 15.995C3.119 15.995 2 17.114 2 18.495C2 19.875 3.119 20.995 4.5 20.995C5.881 20.995 7 19.875 7 18.495ZM9 18.495C9 20.98 6.985 22.995 4.5 22.995C2.015 22.995 0 20.98 0 18.495C0 16.009 2.015 13.995 4.5 13.995C6.985 13.995 9 16.009 9 18.495ZM12.125 3.995C12.125 2.683 13.189 1.62 14.5 1.62C15.812 1.62 16.875 2.683 16.875 3.995C16.875 5.30599 15.812 6.37 14.5 6.37C13.189 6.37 12.125 5.30599 12.125 3.995Z"></path>
                    </svg>
                    <p>910 KZT ₸₸₸₸</p>
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 22C6.5 22 2 17.5 2 12S6.5 2 12 2s10 4.5 10 10-4.5 10-10 10zm0-2.9c-2.2 0-4-1.4-4.4-3.5-.2-.7.1-1.1.8-1.1 2.5 0 5-.1 7.4.1.7 0 .8.2.7 1-.4 2.1-2.3 3.5-4.5 3.5zM5 9.8c.1-2 1.7-3.2 3.5-2.6 1.1.4 1.9 1.7 1.8 2.9-.1.4-.4.8-.8.8-.4.1-.8-.2-1-.7-.1-.2-.2-.5-.2-.7-.1-.3-.3-.6-.7-.6-.3 0-.5.3-.6.6-.1.2-.1.3-.1.5-.1.5-.5.9-1.1.8-.4 0-.8-.4-.8-1zm8.7 0c.1-2 1.8-3.2 3.5-2.5 1.1.4 1.9 1.7 1.7 2.9-.1.4-.4.8-.9.8-.4 0-.8-.3-1-.7 0-.3 0-.6-.1-.9-.1-.2-.3-.4-.6-.4s-.5.2-.6.5c-.1.2-.1.4-.1.6-.1.6-.5 1-1.1.9-.6-.2-.9-.6-.8-1.2z" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                    </svg>
                    <p>8.8</p>
                </div>
            </a>
        </div>
    </main>
    <?php include "views/footer.php"; ?>
</body>
</html>