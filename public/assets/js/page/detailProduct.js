$(document).ready(function () {
    initFetch();
    $("#portfolio-flters").on("click", ".options", function (e) {
        e.preventDefault();
        var id = $(this).data("id");
        // console.log('ID : ' + id);
        $("#coreCategory").removeClass("filter-active");
        $(".options").removeClass("filter-active");
        // $(".tab").addClass("active"); // instead of this do the below
        $(this).addClass("filter-active");
        getSelected(id);
    });
})

function usersProduct() {
    $(".userProduct").slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 3,
        dots: false,
        autoplay: true,
        mobileFirst: true,
        pauseOnFocus: true,
        autoplaySpeed: 6000,
        speed: 2000,
        centerMode: false,
    });
}

async function getClients() {
    // console.log("clientGet");
    // alert('clientGet')
    return new Promise((resolve) => {
        var clientsAPI = `${API_PATH}/public/get/clients`;
        $.getJSON(clientsAPI, {
            format: "json",
        }).done(function (response) {
            let clients = "";
            $.each(response.data, function (i, items) {
                clients += `
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="${BASE_URL}/uploads/clients/${items.icon}" class="img-fluid" alt="${items.name}" title="${items.description}">
                        </div>
                    </div>
                    `;
                $("#clientsData").html(clients);
                // $('#clientsData').removeClass('d-none');
                resolve(true);
            });
        });
    });
}

async function getProduct() {
    $("#coreCategory").addClass("filter-active");
    $(".options").removeClass("filter-active");

    return new Promise((resolve) => {
        var productsAPI = `${API_PATH}/public/get/products`;

        $.getJSON(productsAPI, {
            format: "json",
        }).done(function (response) {
            let products = "";
            $.each(response.data, function (i, items) {
                products += `
                    <div class="col-lg-2 col-md-6 col-sm-6 p-2 portfolio-item filter-${items.id_category_product} ">
                        <div class='card h-100 shadow-sm'>
                            <span class="text-center text-muted">${items.name}</span>
                            <a href="${BASE_URL + '/product/detail/' + items.slug}" class="text-decoration-none">
                                <img src="${BASE_URL}/uploads/products/${items.icon}" class="card-img-top" alt="${items.name}">
                            </a>
                            <div class="item-card position-absolute w-100" style="overflow:hidden">
                                <div class='bg-white p-2 pb-3 portfolio-info shadow-sm' style='position:sticky; top:60%; opacity:0.8'>
                                    <p class="text-truncate">${items.description}</p>
                                    <a href="${BASE_URL + '/product/detail/' + items.slug}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
                $("#productData").html(products);
                resolve(true);
            });
        });
    });
}

async function getCategory() {
    return new Promise((resolve) => {
        {
            var categoryProductsAPI = `${API_PATH}/public/get/category-products`;
            $.getJSON(categoryProductsAPI, {
                format: "json",
            }).done(function (response) {
                // console.log(response);
                let category = ``;
                category += `<li data-filter="*" id="coreCategory" class="filter-active" onclick="getProduct()">All</li>`;
                $.each(response.data, function (i, items) {
                    category += `<li data-filter=".filter-${items.id}" class="options" data-id="${items.id}" id="category${items.name}">${items.name}</li>`;
                    $("#portfolio-flters").html(category);
                    resolve(true);
                });
            });
        }
    });
}

async function getSelected(id) {
    return new Promise((resolve) => {
        var productsAPI = `${API_PATH}/public/get/products`;

        $.getJSON(productsAPI, {
            format: "json",
        }).done(function (response) {
            let products = "";
            $.each(response.data, function (i, items) {
                // console.log(items);
                if (items.id_category_product != id) {
                    products += ``;
                } else {
                    products += `
                        <div class="col-lg-2 col-md-6 col-sm-6 p-2 portfolio-item filter-${items.id_category_product} ">
                            <div class='card h-100 shadow-sm'>
                                <span class="text-center text-muted">${items.name}</span>
                                <a href="${BASE_URL + '/product/detail/' + items.slug}" class="text-decoration-none">
                                    <img src="${BASE_URL}/uploads/products/${items.icon}" class="card-img-top" alt="${items.name}">
                                </a>
                                <div class="item-card position-absolute w-100" style="overflow:hidden">
                                    <div class='bg-white p-2 pb-3 portfolio-info shadow-sm' style='position:sticky; top:60%; opacity:0.8'>
                                        <p class="text-truncate">${items.description}</p>
                                        <a href="${BASE_URL + '/product/detail/' + items.slug}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `;
                }
                $("#productData").html(products);
                resolve(true);
                // console.log('ok getselected');
            });
        });
    });
}

async function getProductData() {
    return new Promise((resolve) => {
        {
            let idProduct = $('#productDetail').attr('data-id');
            let dataCataProductsAPI = `${API_PATH}public/get/products-demo?id=` + idProduct;
            $.getJSON(dataCataProductsAPI, {
                format: "json",
            }).done(function (response) {
                let lCategory = response.count;
                let catDetail = `<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-touch="false" data-bs-interval="false">`;
                catDetail += `<div class="carousel-indicators">`;
                for (let i = 0; i < lCategory; i++) {
                    catDetail += `<button type="button" data-bs-target="#carousel${i}" data-bs-slide-to="${i}" aria-current="true" aria-label="Slide${i}" class="${i === 0 ? 'active' : ''}"></button>`;
                }
                catDetail += `</div>`;
                catDetail += `<div class="carousel-inner">`;
                $.each(response.data, function (i, items) {
                    catDetail += `
                    <div class="carousel-item ${i === 0 ? 'active' : ''}">
                        <div class="row">
                            <div class="col-lg-12" style="height: 30rem;">
                                <iframe class="w-100 h-100" src="${items.link}?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                </iframe>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>${items.title}</h5>
                                </div>
                            </div>
                        </div>
                    </div>`;
                });
                catDetail += `
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>`;

                $("#carouselProduct").html(catDetail);
                resolve(true);
            });
        }
    });
}

async function getProductUser() {
    return new Promise((resolve) => {
        var clientsAPI = `${API_PATH}/public/get/clients`;

        $.getJSON(clientsAPI, {
            format: "json",
        }).done(function (response) {
            let clients = ``;
            clients += `<h5 class="card-title text-center">Who's use this product</h5>`;
            $.each(response.data, function (i, items) {
                console.log(response);
                clients += `
                // <div class="col-lg-5 col-md-5 col-sm-1 p-2">
                //     <div class="testimonial-item">
                //         <img src="${BASE_URL}assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                //         <h3>Saul Goodman</h3>
                //         <h4>Ceo &amp; Founder</h4>
                //         <p>
                //             <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                //             Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                //             Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                //             <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                //         </p>
                //     </div>
                // </div>
                `;
                $("#productClient").html(clients);
                resolve(true);
            });
        });
    });
}

async function initFetch() {
    await getProductData();
    await getCategory();
    await getProduct();
    await getClients();
    await getProductUser();
    usersProduct();
}
