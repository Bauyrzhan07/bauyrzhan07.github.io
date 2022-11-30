<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/common.css">
    <title>Рестораны поблизости - Wolt</title>
</head>
<body>
    <?php  include "views/header.php"; ?>
    <main class="content-list align">
        <?php include "views/nav.php"; ?>
        <?php include "api/restaurants/get_restaurant_categories.php"; ?>
        <h1>Рестораны</h1>
        <div class="slider">
            <div class="slider-head flex-row align">
                <h2>Категории</h2>
                <div class="slider-right">
                    <button class="next-prev-btn" onclick="plusSlides(-2)">
                        <svg viewBox="0 0 24 24"><path d="M22.533 10.526H5.422a.251.251 0 01-.165-.438l4.637-3.6a1.44 1.44 0 00-1.9-2.162L.813 10.165a2.4 2.4 0 000 3.6l7.179 5.837a1.44 1.44 0 001.9-2.161l-4.637-3.6a.251.251 0 01.165-.438h17.113a1.44 1.44 0 000-2.88v.003z"></path></svg>
                    </button>
                    <button class="next-prev-btn" onclick="plusSlides(2)">
                        <svg viewBox="0 0 24 24"><path d="M1.40206 10.5258H18.5131C18.6167 10.5248 18.709 10.4602 18.7455 10.3633C18.7821 10.2663 18.7553 10.1569 18.6781 10.0878L14.0411 6.48776C13.4767 5.95564 13.4352 5.0721 13.9472 4.48944C14.4593 3.90679 15.3408 3.83442 15.9411 4.32576L23.1221 10.1648C23.6387 10.6204 23.9346 11.276 23.9346 11.9648C23.9346 12.6536 23.6387 13.3092 23.1221 13.7648L15.9431 19.6018C15.3426 20.0868 14.4665 20.0121 13.9568 19.4324C13.4471 18.8527 13.4852 17.9742 14.0431 17.4408L18.6801 13.8408C18.7572 13.7717 18.7841 13.6622 18.7475 13.5653C18.711 13.4683 18.6187 13.4038 18.5151 13.4028H1.40206C0.621817 13.3822 0 12.7438 0 11.9633C0 11.1828 0.621817 10.5443 1.40206 10.5238V10.5258Z"></path></svg>
                    </button>
                </div>
            </div>
            <div class="flex-row">
                <?php foreach($categories as $category): ?>
                    <a href="restaurants.php?category_id=<?=$category['id']?>" class="mySlides category-card scalable">
                        <img src="<?=$category['img_url']?>" >
                        <div class="category-card-bottom">
                            <p><?=$category['name']?></p>
                            <p class="category-place-count"><?=$category['places_count']?> мест</p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php include "api/restaurants/get_restaurants.php"; ?>
        <h2>Все рестораны</h2>
        <div class="flex-row flex-wrap">
            <?php foreach($restaurants as $restaurant): ?>
                <a href="restaurant.php?id=<?=$restaurant['id']?>" class="slider-item scalable">
                    <img src="<?=$restaurant['img_url']?>">
                    <div class="inner-item flex-row align">
                        <div class="flex-col">
                            <h4><?=$restaurant['name']?></h4>
                            <p><?=$restaurant['description']?></p>
                        </div>
                        <div class="delivery-time">
                            <p>40-55 мин.</p>
                        </div>
                    </div>
                    
                    <div class="slider-bottom flex-row">
                        <svg class="svg-small" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.401 9.602C4.682 9.883 5.067 10.041 5.463 10.041H5.502C5.918 10.031 6.299 9.854 6.577 9.545L9.734 6.038C10.27 5.443 10.245 4.534 9.679 3.967L8.098 2.385C7.809 2.096 7.394 1.941 7 1.947C6.59 1.957 6.198 2.138 5.924 2.442L2.764 5.954C2.23 6.547 2.254 7.455 2.818 8.02L4.401 9.602ZM10.722 11.734L12.173 10.075C13.547 11.004 15.169 11.499 16.828 11.495H17.5C18.329 11.495 19 10.823 19 9.995C19 9.16599 18.329 8.495 17.5 8.495H16.828C15.416 8.49099 14.062 7.93 13.061 6.93399C12.774 6.62999 12.367 6.47 11.95 6.496C11.535 6.509 11.145 6.69499 10.871 7.007L7.371 11.007C6.827 11.632 6.891 12.58 7.516 13.123C7.565 13.166 7.617 13.206 7.671 13.243L8.335 13.685C10.123 14.89 10.994 17.063 10.535 19.169C10.338 19.974 10.83 20.787 11.635 20.984C12.44 21.181 13.252 20.688 13.449 19.883C13.454 19.863 13.459 19.841 13.463 19.82C14.115 16.825 13.061 13.714 10.722 11.734ZM22 18.495C22 17.114 20.881 15.995 19.5 15.995C18.119 15.995 17 17.114 17 18.495C17 19.875 18.119 20.995 19.5 20.995C20.881 20.995 22 19.875 22 18.495ZM24 18.495C24 20.98 21.985 22.995 19.5 22.995C17.015 22.995 15 20.98 15 18.495C15 16.009 17.015 13.995 19.5 13.995C21.985 13.995 24 16.009 24 18.495ZM7 18.495C7 17.114 5.881 15.995 4.5 15.995C3.119 15.995 2 17.114 2 18.495C2 19.875 3.119 20.995 4.5 20.995C5.881 20.995 7 19.875 7 18.495ZM9 18.495C9 20.98 6.985 22.995 4.5 22.995C2.015 22.995 0 20.98 0 18.495C0 16.009 2.015 13.995 4.5 13.995C6.985 13.995 9 16.009 9 18.495ZM12.125 3.995C12.125 2.683 13.189 1.62 14.5 1.62C15.812 1.62 16.875 2.683 16.875 3.995C16.875 5.30599 15.812 6.37 14.5 6.37C13.189 6.37 12.125 5.30599 12.125 3.995Z"></path>
                        </svg>
                        <p><?=$restaurant['delivery_price']?> ₸₸₸₸</p>
                        <svg class="svg-small" viewBox="0 0 24 24">
                            <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 22C6.5 22 2 17.5 2 12S6.5 2 12 2s10 4.5 10 10-4.5 10-10 10zm0-2.9c-2.2 0-4-1.4-4.4-3.5-.2-.7.1-1.1.8-1.1 2.5 0 5-.1 7.4.1.7 0 .8.2.7 1-.4 2.1-2.3 3.5-4.5 3.5zM5 9.8c.1-2 1.7-3.2 3.5-2.6 1.1.4 1.9 1.7 1.8 2.9-.1.4-.4.8-.8.8-.4.1-.8-.2-1-.7-.1-.2-.2-.5-.2-.7-.1-.3-.3-.6-.7-.6-.3 0-.5.3-.6.6-.1.2-.1.3-.1.5-.1.5-.5.9-1.1.8-.4 0-.8-.4-.8-1zm8.7 0c.1-2 1.8-3.2 3.5-2.5 1.1.4 1.9 1.7 1.7 2.9-.1.4-.4.8-.9.8-.4 0-.8-.3-1-.7 0-.3 0-.6-.1-.9-.1-.2-.3-.4-.6-.4s-.5.2-.6.5c-.1.2-.1.4-.1.6-.1.6-.5 1-1.1.9-.6-.2-.9-.6-.8-1.2z" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                        </svg>
                        <p><?=$restaurant['rating']?></p>
                    </div>
                </a>
            <?php endforeach; ?>
            <!-- <a href="#" class="slider-item scalable">
                <img src="https://imageproxy.wolt.com/venue/63296b72441b7d26742d3310/3de5b330-3ff2-11ed-9c36-defb4235e3a5_7m3a0017.jpg?w=960">
                <div class="inner-item flex-row align">
                    <div class="flex-col">
                        <h4>Sushiеды</h4>
                        <p>Суши, пиццы и многое другое</p>
                    </div>
                    <div class="delivery-time">
                        <p>40-55 мин.</p>
                    </div>
                </div>
                
                <div class="slider-bottom flex-row">
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.401 9.602C4.682 9.883 5.067 10.041 5.463 10.041H5.502C5.918 10.031 6.299 9.854 6.577 9.545L9.734 6.038C10.27 5.443 10.245 4.534 9.679 3.967L8.098 2.385C7.809 2.096 7.394 1.941 7 1.947C6.59 1.957 6.198 2.138 5.924 2.442L2.764 5.954C2.23 6.547 2.254 7.455 2.818 8.02L4.401 9.602ZM10.722 11.734L12.173 10.075C13.547 11.004 15.169 11.499 16.828 11.495H17.5C18.329 11.495 19 10.823 19 9.995C19 9.16599 18.329 8.495 17.5 8.495H16.828C15.416 8.49099 14.062 7.93 13.061 6.93399C12.774 6.62999 12.367 6.47 11.95 6.496C11.535 6.509 11.145 6.69499 10.871 7.007L7.371 11.007C6.827 11.632 6.891 12.58 7.516 13.123C7.565 13.166 7.617 13.206 7.671 13.243L8.335 13.685C10.123 14.89 10.994 17.063 10.535 19.169C10.338 19.974 10.83 20.787 11.635 20.984C12.44 21.181 13.252 20.688 13.449 19.883C13.454 19.863 13.459 19.841 13.463 19.82C14.115 16.825 13.061 13.714 10.722 11.734ZM22 18.495C22 17.114 20.881 15.995 19.5 15.995C18.119 15.995 17 17.114 17 18.495C17 19.875 18.119 20.995 19.5 20.995C20.881 20.995 22 19.875 22 18.495ZM24 18.495C24 20.98 21.985 22.995 19.5 22.995C17.015 22.995 15 20.98 15 18.495C15 16.009 17.015 13.995 19.5 13.995C21.985 13.995 24 16.009 24 18.495ZM7 18.495C7 17.114 5.881 15.995 4.5 15.995C3.119 15.995 2 17.114 2 18.495C2 19.875 3.119 20.995 4.5 20.995C5.881 20.995 7 19.875 7 18.495ZM9 18.495C9 20.98 6.985 22.995 4.5 22.995C2.015 22.995 0 20.98 0 18.495C0 16.009 2.015 13.995 4.5 13.995C6.985 13.995 9 16.009 9 18.495ZM12.125 3.995C12.125 2.683 13.189 1.62 14.5 1.62C15.812 1.62 16.875 2.683 16.875 3.995C16.875 5.30599 15.812 6.37 14.5 6.37C13.189 6.37 12.125 5.30599 12.125 3.995Z"></path>
                    </svg>
                    <p>0 KZT ₸₸₸₸</p>
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 22C6.5 22 2 17.5 2 12S6.5 2 12 2s10 4.5 10 10-4.5 10-10 10zm0-2.9c-2.2 0-4-1.4-4.4-3.5-.2-.7.1-1.1.8-1.1 2.5 0 5-.1 7.4.1.7 0 .8.2.7 1-.4 2.1-2.3 3.5-4.5 3.5zM5 9.8c.1-2 1.7-3.2 3.5-2.6 1.1.4 1.9 1.7 1.8 2.9-.1.4-.4.8-.8.8-.4.1-.8-.2-1-.7-.1-.2-.2-.5-.2-.7-.1-.3-.3-.6-.7-.6-.3 0-.5.3-.6.6-.1.2-.1.3-.1.5-.1.5-.5.9-1.1.8-.4 0-.8-.4-.8-1zm8.7 0c.1-2 1.8-3.2 3.5-2.5 1.1.4 1.9 1.7 1.7 2.9-.1.4-.4.8-.9.8-.4 0-.8-.3-1-.7 0-.3 0-.6-.1-.9-.1-.2-.3-.4-.6-.4s-.5.2-.6.5c-.1.2-.1.4-.1.6-.1.6-.5 1-1.1.9-.6-.2-.9-.6-.8-1.2z" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                    </svg>
                    <p>9.2</p>
                </div>
            </a>
            <a href="#" class="slider-item scalable">
                <img src="https://imageproxy.wolt.com/venue/63202cff4211d4fb5d142d64/8747fdcc-48ca-11ed-8dc7-46d86e04c568_frame_462.png?w=960">
                <div class="inner-item flex-row align">
                    <div class="flex-col">
                        <h4>Токийский Экспресс</h4>
                        <p>Наивкуснейшие суши и роллы</p>
                    </div>
                    <div class="delivery-time">
                        <p>35-45 мин.</p>
                    </div>
                </div>
                
                <div class="slider-bottom flex-row">
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.401 9.602C4.682 9.883 5.067 10.041 5.463 10.041H5.502C5.918 10.031 6.299 9.854 6.577 9.545L9.734 6.038C10.27 5.443 10.245 4.534 9.679 3.967L8.098 2.385C7.809 2.096 7.394 1.941 7 1.947C6.59 1.957 6.198 2.138 5.924 2.442L2.764 5.954C2.23 6.547 2.254 7.455 2.818 8.02L4.401 9.602ZM10.722 11.734L12.173 10.075C13.547 11.004 15.169 11.499 16.828 11.495H17.5C18.329 11.495 19 10.823 19 9.995C19 9.16599 18.329 8.495 17.5 8.495H16.828C15.416 8.49099 14.062 7.93 13.061 6.93399C12.774 6.62999 12.367 6.47 11.95 6.496C11.535 6.509 11.145 6.69499 10.871 7.007L7.371 11.007C6.827 11.632 6.891 12.58 7.516 13.123C7.565 13.166 7.617 13.206 7.671 13.243L8.335 13.685C10.123 14.89 10.994 17.063 10.535 19.169C10.338 19.974 10.83 20.787 11.635 20.984C12.44 21.181 13.252 20.688 13.449 19.883C13.454 19.863 13.459 19.841 13.463 19.82C14.115 16.825 13.061 13.714 10.722 11.734ZM22 18.495C22 17.114 20.881 15.995 19.5 15.995C18.119 15.995 17 17.114 17 18.495C17 19.875 18.119 20.995 19.5 20.995C20.881 20.995 22 19.875 22 18.495ZM24 18.495C24 20.98 21.985 22.995 19.5 22.995C17.015 22.995 15 20.98 15 18.495C15 16.009 17.015 13.995 19.5 13.995C21.985 13.995 24 16.009 24 18.495ZM7 18.495C7 17.114 5.881 15.995 4.5 15.995C3.119 15.995 2 17.114 2 18.495C2 19.875 3.119 20.995 4.5 20.995C5.881 20.995 7 19.875 7 18.495ZM9 18.495C9 20.98 6.985 22.995 4.5 22.995C2.015 22.995 0 20.98 0 18.495C0 16.009 2.015 13.995 4.5 13.995C6.985 13.995 9 16.009 9 18.495ZM12.125 3.995C12.125 2.683 13.189 1.62 14.5 1.62C15.812 1.62 16.875 2.683 16.875 3.995C16.875 5.30599 15.812 6.37 14.5 6.37C13.189 6.37 12.125 5.30599 12.125 3.995Z"></path>
                    </svg>
                    <p>0 KZT ₸₸₸₸</p>
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 22C6.5 22 2 17.5 2 12S6.5 2 12 2s10 4.5 10 10-4.5 10-10 10zm0-2.9c-2.2 0-4-1.4-4.4-3.5-.2-.7.1-1.1.8-1.1 2.5 0 5-.1 7.4.1.7 0 .8.2.7 1-.4 2.1-2.3 3.5-4.5 3.5zM5 9.8c.1-2 1.7-3.2 3.5-2.6 1.1.4 1.9 1.7 1.8 2.9-.1.4-.4.8-.8.8-.4.1-.8-.2-1-.7-.1-.2-.2-.5-.2-.7-.1-.3-.3-.6-.7-.6-.3 0-.5.3-.6.6-.1.2-.1.3-.1.5-.1.5-.5.9-1.1.8-.4 0-.8-.4-.8-1zm8.7 0c.1-2 1.8-3.2 3.5-2.5 1.1.4 1.9 1.7 1.7 2.9-.1.4-.4.8-.9.8-.4 0-.8-.3-1-.7 0-.3 0-.6-.1-.9-.1-.2-.3-.4-.6-.4s-.5.2-.6.5c-.1.2-.1.4-.1.6-.1.6-.5 1-1.1.9-.6-.2-.9-.6-.8-1.2z" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                    </svg>
                    <p>8.6</p>
                </div>
            </a>
            <a href="#" class="slider-item scalable">
                <img src="https://imageproxy.wolt.com/venue/5fa3a9b626986719bf65c9b5/b46565dc-ca54-11ec-8363-e21af87d54eb_542633a8_c29f_11eb_a2b2_3e73cdc9c0a8_1c27fdb8_0951_11eb_aa9d_c6e1b606c4c4_whopper1_1200_800.jpeg?w=960">
                <div class="inner-item flex-row align">
                    <div class="flex-col">
                        <h4>Burger King</h4>
                        <p>Taste is king 👑</p>
                    </div>
                    <div class="delivery-time">
                        <p>30-40 мин.</p>
                    </div>
                </div>
                
                <div class="slider-bottom flex-row">
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.401 9.602C4.682 9.883 5.067 10.041 5.463 10.041H5.502C5.918 10.031 6.299 9.854 6.577 9.545L9.734 6.038C10.27 5.443 10.245 4.534 9.679 3.967L8.098 2.385C7.809 2.096 7.394 1.941 7 1.947C6.59 1.957 6.198 2.138 5.924 2.442L2.764 5.954C2.23 6.547 2.254 7.455 2.818 8.02L4.401 9.602ZM10.722 11.734L12.173 10.075C13.547 11.004 15.169 11.499 16.828 11.495H17.5C18.329 11.495 19 10.823 19 9.995C19 9.16599 18.329 8.495 17.5 8.495H16.828C15.416 8.49099 14.062 7.93 13.061 6.93399C12.774 6.62999 12.367 6.47 11.95 6.496C11.535 6.509 11.145 6.69499 10.871 7.007L7.371 11.007C6.827 11.632 6.891 12.58 7.516 13.123C7.565 13.166 7.617 13.206 7.671 13.243L8.335 13.685C10.123 14.89 10.994 17.063 10.535 19.169C10.338 19.974 10.83 20.787 11.635 20.984C12.44 21.181 13.252 20.688 13.449 19.883C13.454 19.863 13.459 19.841 13.463 19.82C14.115 16.825 13.061 13.714 10.722 11.734ZM22 18.495C22 17.114 20.881 15.995 19.5 15.995C18.119 15.995 17 17.114 17 18.495C17 19.875 18.119 20.995 19.5 20.995C20.881 20.995 22 19.875 22 18.495ZM24 18.495C24 20.98 21.985 22.995 19.5 22.995C17.015 22.995 15 20.98 15 18.495C15 16.009 17.015 13.995 19.5 13.995C21.985 13.995 24 16.009 24 18.495ZM7 18.495C7 17.114 5.881 15.995 4.5 15.995C3.119 15.995 2 17.114 2 18.495C2 19.875 3.119 20.995 4.5 20.995C5.881 20.995 7 19.875 7 18.495ZM9 18.495C9 20.98 6.985 22.995 4.5 22.995C2.015 22.995 0 20.98 0 18.495C0 16.009 2.015 13.995 4.5 13.995C6.985 13.995 9 16.009 9 18.495ZM12.125 3.995C12.125 2.683 13.189 1.62 14.5 1.62C15.812 1.62 16.875 2.683 16.875 3.995C16.875 5.30599 15.812 6.37 14.5 6.37C13.189 6.37 12.125 5.30599 12.125 3.995Z"></path>
                    </svg>
                    <p>540 KZT ₸₸₸₸</p>
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 22C6.5 22 2 17.5 2 12S6.5 2 12 2s10 4.5 10 10-4.5 10-10 10zm0-2.9c-2.2 0-4-1.4-4.4-3.5-.2-.7.1-1.1.8-1.1 2.5 0 5-.1 7.4.1.7 0 .8.2.7 1-.4 2.1-2.3 3.5-4.5 3.5zM5 9.8c.1-2 1.7-3.2 3.5-2.6 1.1.4 1.9 1.7 1.8 2.9-.1.4-.4.8-.8.8-.4.1-.8-.2-1-.7-.1-.2-.2-.5-.2-.7-.1-.3-.3-.6-.7-.6-.3 0-.5.3-.6.6-.1.2-.1.3-.1.5-.1.5-.5.9-1.1.8-.4 0-.8-.4-.8-1zm8.7 0c.1-2 1.8-3.2 3.5-2.5 1.1.4 1.9 1.7 1.7 2.9-.1.4-.4.8-.9.8-.4 0-.8-.3-1-.7 0-.3 0-.6-.1-.9-.1-.2-.3-.4-.6-.4s-.5.2-.6.5c-.1.2-.1.4-.1.6-.1.6-.5 1-1.1.9-.6-.2-.9-.6-.8-1.2z" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                    </svg>
                    <p>8.2</p>
                </div>
            </a>
            <a href="#" class="slider-item scalable">
                <img src="https://imageproxy.wolt.com/venue/5dcbd198f70ee7caf7b8ebf4/2a7e23e0-5344-11ec-86cc-1e6e4ffc9ad6_ketchup.jpg?w=960">
                <div class="inner-item flex-row align">
                    <div class="flex-col">
                        <h4>KETCHUP</h4>
                        <p>Обалденные бургеры и креветки Лауреат Премии Wolt-2020 🏆</p>
                    </div>
                    <div class="delivery-time">
                        <p>35-45 мин.</p>
                    </div>
                </div>
                
                <div class="slider-bottom flex-row">
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.401 9.602C4.682 9.883 5.067 10.041 5.463 10.041H5.502C5.918 10.031 6.299 9.854 6.577 9.545L9.734 6.038C10.27 5.443 10.245 4.534 9.679 3.967L8.098 2.385C7.809 2.096 7.394 1.941 7 1.947C6.59 1.957 6.198 2.138 5.924 2.442L2.764 5.954C2.23 6.547 2.254 7.455 2.818 8.02L4.401 9.602ZM10.722 11.734L12.173 10.075C13.547 11.004 15.169 11.499 16.828 11.495H17.5C18.329 11.495 19 10.823 19 9.995C19 9.16599 18.329 8.495 17.5 8.495H16.828C15.416 8.49099 14.062 7.93 13.061 6.93399C12.774 6.62999 12.367 6.47 11.95 6.496C11.535 6.509 11.145 6.69499 10.871 7.007L7.371 11.007C6.827 11.632 6.891 12.58 7.516 13.123C7.565 13.166 7.617 13.206 7.671 13.243L8.335 13.685C10.123 14.89 10.994 17.063 10.535 19.169C10.338 19.974 10.83 20.787 11.635 20.984C12.44 21.181 13.252 20.688 13.449 19.883C13.454 19.863 13.459 19.841 13.463 19.82C14.115 16.825 13.061 13.714 10.722 11.734ZM22 18.495C22 17.114 20.881 15.995 19.5 15.995C18.119 15.995 17 17.114 17 18.495C17 19.875 18.119 20.995 19.5 20.995C20.881 20.995 22 19.875 22 18.495ZM24 18.495C24 20.98 21.985 22.995 19.5 22.995C17.015 22.995 15 20.98 15 18.495C15 16.009 17.015 13.995 19.5 13.995C21.985 13.995 24 16.009 24 18.495ZM7 18.495C7 17.114 5.881 15.995 4.5 15.995C3.119 15.995 2 17.114 2 18.495C2 19.875 3.119 20.995 4.5 20.995C5.881 20.995 7 19.875 7 18.495ZM9 18.495C9 20.98 6.985 22.995 4.5 22.995C2.015 22.995 0 20.98 0 18.495C0 16.009 2.015 13.995 4.5 13.995C6.985 13.995 9 16.009 9 18.495ZM12.125 3.995C12.125 2.683 13.189 1.62 14.5 1.62C15.812 1.62 16.875 2.683 16.875 3.995C16.875 5.30599 15.812 6.37 14.5 6.37C13.189 6.37 12.125 5.30599 12.125 3.995Z"></path>
                    </svg>
                    <p>590 KZT ₸₸₸₸</p>
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 22C6.5 22 2 17.5 2 12S6.5 2 12 2s10 4.5 10 10-4.5 10-10 10zm0-2.9c-2.2 0-4-1.4-4.4-3.5-.2-.7.1-1.1.8-1.1 2.5 0 5-.1 7.4.1.7 0 .8.2.7 1-.4 2.1-2.3 3.5-4.5 3.5zM5 9.8c.1-2 1.7-3.2 3.5-2.6 1.1.4 1.9 1.7 1.8 2.9-.1.4-.4.8-.8.8-.4.1-.8-.2-1-.7-.1-.2-.2-.5-.2-.7-.1-.3-.3-.6-.7-.6-.3 0-.5.3-.6.6-.1.2-.1.3-.1.5-.1.5-.5.9-1.1.8-.4 0-.8-.4-.8-1zm8.7 0c.1-2 1.8-3.2 3.5-2.5 1.1.4 1.9 1.7 1.7 2.9-.1.4-.4.8-.9.8-.4 0-.8-.3-1-.7 0-.3 0-.6-.1-.9-.1-.2-.3-.4-.6-.4s-.5.2-.6.5c-.1.2-.1.4-.1.6-.1.6-.5 1-1.1.9-.6-.2-.9-.6-.8-1.2z" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                    </svg>
                    <p>9.0</p>
                </div>
            </a>
            <a href="#" class="slider-item scalable">
                <img src="https://imageproxy.wolt.com/venue/5d5a15c58e9410eedcb506a3/74e33474-2ea0-11ed-97d8-cefd147212ea_frame_436__2_.png?w=960">
                <div class="inner-item flex-row align">
                    <div class="flex-col">
                        <h4>Дареджани Курмангазы</h4>
                        <p>Современный грузинский ресторан</p>
                    </div>
                    <div class="delivery-time">
                        <p>40-50 мин.</p>
                    </div>
                </div>
                
                <div class="slider-bottom flex-row">
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.401 9.602C4.682 9.883 5.067 10.041 5.463 10.041H5.502C5.918 10.031 6.299 9.854 6.577 9.545L9.734 6.038C10.27 5.443 10.245 4.534 9.679 3.967L8.098 2.385C7.809 2.096 7.394 1.941 7 1.947C6.59 1.957 6.198 2.138 5.924 2.442L2.764 5.954C2.23 6.547 2.254 7.455 2.818 8.02L4.401 9.602ZM10.722 11.734L12.173 10.075C13.547 11.004 15.169 11.499 16.828 11.495H17.5C18.329 11.495 19 10.823 19 9.995C19 9.16599 18.329 8.495 17.5 8.495H16.828C15.416 8.49099 14.062 7.93 13.061 6.93399C12.774 6.62999 12.367 6.47 11.95 6.496C11.535 6.509 11.145 6.69499 10.871 7.007L7.371 11.007C6.827 11.632 6.891 12.58 7.516 13.123C7.565 13.166 7.617 13.206 7.671 13.243L8.335 13.685C10.123 14.89 10.994 17.063 10.535 19.169C10.338 19.974 10.83 20.787 11.635 20.984C12.44 21.181 13.252 20.688 13.449 19.883C13.454 19.863 13.459 19.841 13.463 19.82C14.115 16.825 13.061 13.714 10.722 11.734ZM22 18.495C22 17.114 20.881 15.995 19.5 15.995C18.119 15.995 17 17.114 17 18.495C17 19.875 18.119 20.995 19.5 20.995C20.881 20.995 22 19.875 22 18.495ZM24 18.495C24 20.98 21.985 22.995 19.5 22.995C17.015 22.995 15 20.98 15 18.495C15 16.009 17.015 13.995 19.5 13.995C21.985 13.995 24 16.009 24 18.495ZM7 18.495C7 17.114 5.881 15.995 4.5 15.995C3.119 15.995 2 17.114 2 18.495C2 19.875 3.119 20.995 4.5 20.995C5.881 20.995 7 19.875 7 18.495ZM9 18.495C9 20.98 6.985 22.995 4.5 22.995C2.015 22.995 0 20.98 0 18.495C0 16.009 2.015 13.995 4.5 13.995C6.985 13.995 9 16.009 9 18.495ZM12.125 3.995C12.125 2.683 13.189 1.62 14.5 1.62C15.812 1.62 16.875 2.683 16.875 3.995C16.875 5.30599 15.812 6.37 14.5 6.37C13.189 6.37 12.125 5.30599 12.125 3.995Z"></path>
                    </svg>
                    <p>540 KZT ₸₸₸₸</p>
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 22C6.5 22 2 17.5 2 12S6.5 2 12 2s10 4.5 10 10-4.5 10-10 10zm0-2.9c-2.2 0-4-1.4-4.4-3.5-.2-.7.1-1.1.8-1.1 2.5 0 5-.1 7.4.1.7 0 .8.2.7 1-.4 2.1-2.3 3.5-4.5 3.5zM5 9.8c.1-2 1.7-3.2 3.5-2.6 1.1.4 1.9 1.7 1.8 2.9-.1.4-.4.8-.8.8-.4.1-.8-.2-1-.7-.1-.2-.2-.5-.2-.7-.1-.3-.3-.6-.7-.6-.3 0-.5.3-.6.6-.1.2-.1.3-.1.5-.1.5-.5.9-1.1.8-.4 0-.8-.4-.8-1zm8.7 0c.1-2 1.8-3.2 3.5-2.5 1.1.4 1.9 1.7 1.7 2.9-.1.4-.4.8-.9.8-.4 0-.8-.3-1-.7 0-.3 0-.6-.1-.9-.1-.2-.3-.4-.6-.4s-.5.2-.6.5c-.1.2-.1.4-.1.6-.1.6-.5 1-1.1.9-.6-.2-.9-.6-.8-1.2z" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                    </svg>
                    <p>10.0</p>
                </div>
            </a>
            <a href="#" class="slider-item scalable">
                <img src="https://imageproxy.wolt.com/venue/5d538b16579fa3b5478b29cd/a5a2ada4-350a-11ed-8a4d-d2795800a27d_frame_404.png?w=960">
                <div class="inner-item flex-row align">
                    <div class="flex-col">
                        <h4>Luckee Yu</h4>
                        <p>Ресторан современной азиатской кухни</p>
                    </div>
                    <div class="delivery-time">
                        <p>40-50 мин.</p>
                    </div>
                </div>
                
                <div class="slider-bottom flex-row">
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.401 9.602C4.682 9.883 5.067 10.041 5.463 10.041H5.502C5.918 10.031 6.299 9.854 6.577 9.545L9.734 6.038C10.27 5.443 10.245 4.534 9.679 3.967L8.098 2.385C7.809 2.096 7.394 1.941 7 1.947C6.59 1.957 6.198 2.138 5.924 2.442L2.764 5.954C2.23 6.547 2.254 7.455 2.818 8.02L4.401 9.602ZM10.722 11.734L12.173 10.075C13.547 11.004 15.169 11.499 16.828 11.495H17.5C18.329 11.495 19 10.823 19 9.995C19 9.16599 18.329 8.495 17.5 8.495H16.828C15.416 8.49099 14.062 7.93 13.061 6.93399C12.774 6.62999 12.367 6.47 11.95 6.496C11.535 6.509 11.145 6.69499 10.871 7.007L7.371 11.007C6.827 11.632 6.891 12.58 7.516 13.123C7.565 13.166 7.617 13.206 7.671 13.243L8.335 13.685C10.123 14.89 10.994 17.063 10.535 19.169C10.338 19.974 10.83 20.787 11.635 20.984C12.44 21.181 13.252 20.688 13.449 19.883C13.454 19.863 13.459 19.841 13.463 19.82C14.115 16.825 13.061 13.714 10.722 11.734ZM22 18.495C22 17.114 20.881 15.995 19.5 15.995C18.119 15.995 17 17.114 17 18.495C17 19.875 18.119 20.995 19.5 20.995C20.881 20.995 22 19.875 22 18.495ZM24 18.495C24 20.98 21.985 22.995 19.5 22.995C17.015 22.995 15 20.98 15 18.495C15 16.009 17.015 13.995 19.5 13.995C21.985 13.995 24 16.009 24 18.495ZM7 18.495C7 17.114 5.881 15.995 4.5 15.995C3.119 15.995 2 17.114 2 18.495C2 19.875 3.119 20.995 4.5 20.995C5.881 20.995 7 19.875 7 18.495ZM9 18.495C9 20.98 6.985 22.995 4.5 22.995C2.015 22.995 0 20.98 0 18.495C0 16.009 2.015 13.995 4.5 13.995C6.985 13.995 9 16.009 9 18.495ZM12.125 3.995C12.125 2.683 13.189 1.62 14.5 1.62C15.812 1.62 16.875 2.683 16.875 3.995C16.875 5.30599 15.812 6.37 14.5 6.37C13.189 6.37 12.125 5.30599 12.125 3.995Z"></path>
                    </svg>
                    <p>540 KZT ₸₸₸₸</p>
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 22C6.5 22 2 17.5 2 12S6.5 2 12 2s10 4.5 10 10-4.5 10-10 10zm0-2.9c-2.2 0-4-1.4-4.4-3.5-.2-.7.1-1.1.8-1.1 2.5 0 5-.1 7.4.1.7 0 .8.2.7 1-.4 2.1-2.3 3.5-4.5 3.5zM5 9.8c.1-2 1.7-3.2 3.5-2.6 1.1.4 1.9 1.7 1.8 2.9-.1.4-.4.8-.8.8-.4.1-.8-.2-1-.7-.1-.2-.2-.5-.2-.7-.1-.3-.3-.6-.7-.6-.3 0-.5.3-.6.6-.1.2-.1.3-.1.5-.1.5-.5.9-1.1.8-.4 0-.8-.4-.8-1zm8.7 0c.1-2 1.8-3.2 3.5-2.5 1.1.4 1.9 1.7 1.7 2.9-.1.4-.4.8-.9.8-.4 0-.8-.3-1-.7 0-.3 0-.6-.1-.9-.1-.2-.3-.4-.6-.4s-.5.2-.6.5c-.1.2-.1.4-.1.6-.1.6-.5 1-1.1.9-.6-.2-.9-.6-.8-1.2z" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                    </svg>
                    <p>8.6</p>
                </div>
            </a>
            <a href="#" class="slider-item scalable">
                <img src="https://imageproxy.wolt.com/venue/6308d36bb030108a94cabfc7/e7b9a50a-40e3-11ed-85a2-ba9ae8d221e8_frame_460.png?w=960">
                <div class="inner-item flex-row align">
                    <div class="flex-col">
                        <h4>Sultan Express Панфилова</h4>
                        <p>Самые лучшие донеры, которые ты пробовал</p>
                    </div>
                    <div class="delivery-time">
                        <p>45-55 мин.</p>
                    </div>
                </div>
                
                <div class="slider-bottom flex-row">
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.401 9.602C4.682 9.883 5.067 10.041 5.463 10.041H5.502C5.918 10.031 6.299 9.854 6.577 9.545L9.734 6.038C10.27 5.443 10.245 4.534 9.679 3.967L8.098 2.385C7.809 2.096 7.394 1.941 7 1.947C6.59 1.957 6.198 2.138 5.924 2.442L2.764 5.954C2.23 6.547 2.254 7.455 2.818 8.02L4.401 9.602ZM10.722 11.734L12.173 10.075C13.547 11.004 15.169 11.499 16.828 11.495H17.5C18.329 11.495 19 10.823 19 9.995C19 9.16599 18.329 8.495 17.5 8.495H16.828C15.416 8.49099 14.062 7.93 13.061 6.93399C12.774 6.62999 12.367 6.47 11.95 6.496C11.535 6.509 11.145 6.69499 10.871 7.007L7.371 11.007C6.827 11.632 6.891 12.58 7.516 13.123C7.565 13.166 7.617 13.206 7.671 13.243L8.335 13.685C10.123 14.89 10.994 17.063 10.535 19.169C10.338 19.974 10.83 20.787 11.635 20.984C12.44 21.181 13.252 20.688 13.449 19.883C13.454 19.863 13.459 19.841 13.463 19.82C14.115 16.825 13.061 13.714 10.722 11.734ZM22 18.495C22 17.114 20.881 15.995 19.5 15.995C18.119 15.995 17 17.114 17 18.495C17 19.875 18.119 20.995 19.5 20.995C20.881 20.995 22 19.875 22 18.495ZM24 18.495C24 20.98 21.985 22.995 19.5 22.995C17.015 22.995 15 20.98 15 18.495C15 16.009 17.015 13.995 19.5 13.995C21.985 13.995 24 16.009 24 18.495ZM7 18.495C7 17.114 5.881 15.995 4.5 15.995C3.119 15.995 2 17.114 2 18.495C2 19.875 3.119 20.995 4.5 20.995C5.881 20.995 7 19.875 7 18.495ZM9 18.495C9 20.98 6.985 22.995 4.5 22.995C2.015 22.995 0 20.98 0 18.495C0 16.009 2.015 13.995 4.5 13.995C6.985 13.995 9 16.009 9 18.495ZM12.125 3.995C12.125 2.683 13.189 1.62 14.5 1.62C15.812 1.62 16.875 2.683 16.875 3.995C16.875 5.30599 15.812 6.37 14.5 6.37C13.189 6.37 12.125 5.30599 12.125 3.995Z"></path>
                    </svg>
                    <p>690 KZT ₸₸₸₸</p>
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 22C6.5 22 2 17.5 2 12S6.5 2 12 2s10 4.5 10 10-4.5 10-10 10zm0-2.9c-2.2 0-4-1.4-4.4-3.5-.2-.7.1-1.1.8-1.1 2.5 0 5-.1 7.4.1.7 0 .8.2.7 1-.4 2.1-2.3 3.5-4.5 3.5zM5 9.8c.1-2 1.7-3.2 3.5-2.6 1.1.4 1.9 1.7 1.8 2.9-.1.4-.4.8-.8.8-.4.1-.8-.2-1-.7-.1-.2-.2-.5-.2-.7-.1-.3-.3-.6-.7-.6-.3 0-.5.3-.6.6-.1.2-.1.3-.1.5-.1.5-.5.9-1.1.8-.4 0-.8-.4-.8-1zm8.7 0c.1-2 1.8-3.2 3.5-2.5 1.1.4 1.9 1.7 1.7 2.9-.1.4-.4.8-.9.8-.4 0-.8-.3-1-.7 0-.3 0-.6-.1-.9-.1-.2-.3-.4-.6-.4s-.5.2-.6.5c-.1.2-.1.4-.1.6-.1.6-.5 1-1.1.9-.6-.2-.9-.6-.8-1.2z" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                    </svg>
                    <p>7.8</p>
                </div>
            </a>
            <a href="#" class="slider-item scalable">
                <img src="https://imageproxy.wolt.com/venue/627227efd4a080fac9954f73/df7b9938-40cb-11ed-aea0-12c89536554d_frame_413__2_.png?w=960">
                <div class="inner-item flex-row align">
                    <div class="flex-col">
                        <h4>Летка</h4>
                        <p>Завтрак 🍳 Кофе ☕️ Хорошая атмосфера ☀️</p>
                    </div>
                    <div class="delivery-time">
                        <p>35-45 мин.</p>
                    </div>
                </div>
                
                <div class="slider-bottom flex-row">
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.401 9.602C4.682 9.883 5.067 10.041 5.463 10.041H5.502C5.918 10.031 6.299 9.854 6.577 9.545L9.734 6.038C10.27 5.443 10.245 4.534 9.679 3.967L8.098 2.385C7.809 2.096 7.394 1.941 7 1.947C6.59 1.957 6.198 2.138 5.924 2.442L2.764 5.954C2.23 6.547 2.254 7.455 2.818 8.02L4.401 9.602ZM10.722 11.734L12.173 10.075C13.547 11.004 15.169 11.499 16.828 11.495H17.5C18.329 11.495 19 10.823 19 9.995C19 9.16599 18.329 8.495 17.5 8.495H16.828C15.416 8.49099 14.062 7.93 13.061 6.93399C12.774 6.62999 12.367 6.47 11.95 6.496C11.535 6.509 11.145 6.69499 10.871 7.007L7.371 11.007C6.827 11.632 6.891 12.58 7.516 13.123C7.565 13.166 7.617 13.206 7.671 13.243L8.335 13.685C10.123 14.89 10.994 17.063 10.535 19.169C10.338 19.974 10.83 20.787 11.635 20.984C12.44 21.181 13.252 20.688 13.449 19.883C13.454 19.863 13.459 19.841 13.463 19.82C14.115 16.825 13.061 13.714 10.722 11.734ZM22 18.495C22 17.114 20.881 15.995 19.5 15.995C18.119 15.995 17 17.114 17 18.495C17 19.875 18.119 20.995 19.5 20.995C20.881 20.995 22 19.875 22 18.495ZM24 18.495C24 20.98 21.985 22.995 19.5 22.995C17.015 22.995 15 20.98 15 18.495C15 16.009 17.015 13.995 19.5 13.995C21.985 13.995 24 16.009 24 18.495ZM7 18.495C7 17.114 5.881 15.995 4.5 15.995C3.119 15.995 2 17.114 2 18.495C2 19.875 3.119 20.995 4.5 20.995C5.881 20.995 7 19.875 7 18.495ZM9 18.495C9 20.98 6.985 22.995 4.5 22.995C2.015 22.995 0 20.98 0 18.495C0 16.009 2.015 13.995 4.5 13.995C6.985 13.995 9 16.009 9 18.495ZM12.125 3.995C12.125 2.683 13.189 1.62 14.5 1.62C15.812 1.62 16.875 2.683 16.875 3.995C16.875 5.30599 15.812 6.37 14.5 6.37C13.189 6.37 12.125 5.30599 12.125 3.995Z"></path>
                    </svg>
                    <p>540 KZT ₸₸₸₸</p>
                    <svg class="svg-small" viewBox="0 0 24 24">
                        <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 22C6.5 22 2 17.5 2 12S6.5 2 12 2s10 4.5 10 10-4.5 10-10 10zm0-2.9c-2.2 0-4-1.4-4.4-3.5-.2-.7.1-1.1.8-1.1 2.5 0 5-.1 7.4.1.7 0 .8.2.7 1-.4 2.1-2.3 3.5-4.5 3.5zM5 9.8c.1-2 1.7-3.2 3.5-2.6 1.1.4 1.9 1.7 1.8 2.9-.1.4-.4.8-.8.8-.4.1-.8-.2-1-.7-.1-.2-.2-.5-.2-.7-.1-.3-.3-.6-.7-.6-.3 0-.5.3-.6.6-.1.2-.1.3-.1.5-.1.5-.5.9-1.1.8-.4 0-.8-.4-.8-1zm8.7 0c.1-2 1.8-3.2 3.5-2.5 1.1.4 1.9 1.7 1.7 2.9-.1.4-.4.8-.9.8-.4 0-.8-.3-1-.7 0-.3 0-.6-.1-.9-.1-.2-.3-.4-.6-.4s-.5.2-.6.5c-.1.2-.1.4-.1.6-.1.6-.5 1-1.1.9-.6-.2-.9-.6-.8-1.2z" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                    </svg>
                    <p>8.6</p>
                </div> -->
            <!-- </a> -->
        </div>
    </main>
    <script src="script.js"></script>
    <?php include "views/footer.php"; ?>
</body>
</html>