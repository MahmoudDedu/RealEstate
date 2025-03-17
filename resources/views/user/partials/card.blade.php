<style>
    /* البطاقة العامة */
    .property-card {
        position: relative;
        border-radius: 12px; /* زيادة الانحناءات */
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #f9f9f9; /* خلفية فاتحة */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        font-family: 'Roboto', sans-serif; /* تغيير الخط */
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-size: 1.5rem; /* تكبير حجم الخط الأساسي */
    }

    .property-card:hover {
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        transform: translateY(-4px);
    }

    /* زر المفضلة العائم في الزاوية اليسرى العلوية */
    .favorite-btn {
        position: absolute;
        top: 15px;
        left: 15px;
        background: #fff;
        border: 1px solid #c5c62a; /* تم إصلاح خاصية اللون بإضافة # */
        color: #c5c62a;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background 0.3s, color 0.3s;
        z-index: 2;
    }

    .favorite-btn:hover {
        background: #c5c62a;
        color: #fff;
    }

    .favorite-btn.active {
        background: #c5c62a;
        color: #fff;
    }

    .favorite-btn box-icon {
        width: 20px;
        height: 20px;
    }

    /* الصورة القابلة للنقر */
    .property-image {
        display: block;
        position: relative;
        width: 100%;
        height: 220px; /* زيادة ارتفاع الصورة */
        overflow: hidden;
        text-decoration: none;
    }

    .property-image img {
        object-fit: cover;
        width: 100%;
        height: 100%;
        transition: transform 0.3s;
    }

    .property-image:hover img {
        transform: scale(1.1); /* تكبير بسيط عند التحويم */
    }

    /* قسم التفاصيل */
    .property-details {
        padding: 20px; /* زيادة الحشوة الداخلية */
    }

    /* العنوان */
    .property-details h5 {
        margin-bottom: 10px;
        font-size: 1.5rem; /* تكبير حجم العنوان */
        color: #333;
        font-weight: 600;
    }

    /* تعديل meta-row لإضافة gap وتكبير حجم الخط */
    .meta-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 12px;
        font-size: 1.5rem; /* تكبير حجم الخط للمعلومات الأساسية */
        color: #555;
    }

    .property-area,
    .property-price {
        font-weight: 700;
    }

    /* الوصف المختصر مع رابط "Read More" */
    .property-desc {
        margin-bottom: 12px;
        color: #666;
        font-size: 1.2rem; /* تكبير حجم النص الوصفي */
        line-height: 1.4;
    }

    .property-desc a {
        color: #c5c62a;
        text-decoration: none;
        font-weight: bold;
        margin-left: 5px;
    }

    .property-desc a:hover {
        text-decoration: underline;
    }

    /* أيقونات العقار */
    .property-icons {
        display: flex;
        align-items: center;
        gap: 20px; /* زيادة المسافة بين الأيقونات */
    }

    .property-icons box-icon {
        width: 26px; /* تكبير الأيقونات بما يتناسب مع زيادة حجم الخط */
        height: 26px;
    }
</style>

<div class="col-sm-6 col-md-3 mb-4 padding-bottom-40">
    <div class="property-card">

        <!-- زر المفضلة العائم -->
        <button class="favorite-btn">
            <box-icon name="heart" type="regular" color="#c5c62a"></box-icon>
        </button>

        <!-- الصورة قابلة للنقر للانتقال لصفحة التفاصيل -->
        <a href="property-1.html" class="property-image">
            <img src="{{ asset('assets/user/img/demo/property-3.jpg') }}" alt="Property Image">
        </a>

        <!-- التفاصيل الداخلية -->
        <div class="property-details">
            <h5>Super nice villa</h5>

            <!-- السطر الذي يحتوي على المساحة والسعر مع مسافة بينهما -->
            <div class="meta-row">
                <span class="property-area"><b>Area </b>1200</span>
                <span class="property-price">$300,000</span>
            </div>

            <!-- الوصف المختصر مع "Read More" -->
            <p class="property-desc">
                Luxurious place
                <a href="#">Read More</a>
            </p>

            <!-- أيقونات (غرف النوم/الحمامات/السيارة...) -->
            <div class="property-icons">
                <div>
                    <box-icon name="bed" color="#c5c62a"></box-icon>
                    <span>5</span>
                </div>
                <div>
                    <box-icon name="bath" color="#c5c62a"></box-icon>
                    <span>2</span>
                </div>
                <div>
                    <box-icon name="car" color="#c5c62a"></box-icon>
                    <span>1</span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const favoriteBtn = document.querySelector('.favorite-btn');
        favoriteBtn.addEventListener('click', function(e) {
            e.preventDefault(); // منع أي سلوك افتراضي غير مرغوب فيه
            this.classList.toggle('active');
            const icon = this.querySelector('box-icon');
            if (this.classList.contains('active')) {
                // تغيير الأيقونة إلى مُعبّأة
                icon.setAttribute('type', 'solid');
            } else {
                // إعادة الأيقونة إلى الحالة الأصلية (غير مُعبّأة)
                icon.setAttribute('type', 'regular');
            }
        });
    });
</script>
