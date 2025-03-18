<!-- تضمين أيقونات Boxicons -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<style>
    /* تنسيق الحاوية الرئيسية */
    .sort-by-container {
        position: relative;
        width: 100%;
        overflow: hidden;
        padding: 10px 0;
        direction: rtl; /* دعم اللغة العربية */
    }

    /* تنسيق القائمة الأفقية */
    .sort-by-list {
        display: flex;
        gap: 15px;
        list-style: none;
        padding: 10px;
        margin: 0;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        white-space: nowrap;
        scrollbar-width: none;
        -ms-overflow-style: none;
        scroll-behavior: smooth;
    }

    /* إخفاء شريط التمرير */
    .sort-by-list::-webkit-scrollbar {
        display: none;
    }

    /* تنسيق العناصر */
    .sort-by-list li {
        background: #ffffff;
        padding: 12px 18px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        transition: background 0.3s, transform 0.3s;
        flex: 0 0 auto;
        scroll-snap-align: start;
        cursor: pointer;
    }

    /* عند تمرير الماوس */
    .sort-by-list li:hover {
        background: #f1f1f1;
        transform: translateY(-3px);
    }

    /* العنصر النشط */
    .sort-by-list li.active {
        background: #FDC600;
        color: #fff;
    }

    .sort-by-list li.active a {
        color: #fff;
    }

    /* تنسيق الروابط */
    .sort-by-list a {
        display: flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        color: #333;
        font-weight: bold;
        font-size: 1.4rem; /* حجم الخط مناسب */
    }

    /* زرّي التمرير */
    .scroll-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.8);
        border: 1px solid #ccc;
        padding: 8px;
        cursor: pointer;
        border-radius: 50%;
        transition: 0.3s;
        color: #333;
        opacity: 0;
        z-index: 1;
    }

    .scroll-btn:hover {
        background: rgba(255, 255, 255, 1);
    }

    .sort-by-container:hover .scroll-btn {
        opacity: 1;
    }

    /* زر الاتجاهات */
    .prev {
        right: 10px;
    }

    .next {
        left: 10px;
    }
</style>

<div class="sort-by-container">
    <button class="scroll-btn prev"><i class='bx bx-chevron-right'></i></button>
    <ul class="sort-by-list">
        <li class="active"><a href="#"><i class='bx bxs-building-house'></i> منزل</a></li>
        <li><a href="#"><i class='bx bxs-castle'></i> فيلا</a></li>
        <li><a href="#"><i class='bx bxs-store'></i> متجر</a></li>
        <li><a href="#"><i class='bx bxs-hotel'></i> فندق</a></li>
        <li><a href="#"><i class='bx bxs-briefcase'></i> مكتب</a></li>
        <li><a href="#"><i class='bx bxs-home'></i> شقة</a></li>
        <li><a href="#"><i class='bx bxs-building'></i> تجاري</a></li>
        <li><a href="#"><i class='bx bxs-factory'></i> صناعي</a></li>
        <li><a href="#"><i class='bx bxs-tree'></i> أرض</a></li>
        <li><a href="#"><i class='bx bxs-garage'></i> كراج</a></li>
        <li><a href="#"><i class='bx bxs-home'></i> منزل ريفي</a></li>
        <li><a href="#"><i class='bx bxs-city'></i> شقة فاخرة</a></li>
        <li><a href="#"><i class='bx bxs-home-smile'></i> منزل مستقل</a></li>
        <li><a href="#"><i class='bx bxs-tree-alt'></i> كوخ خشبي</a></li>
        <li><a href="#"><i class='bx bxs-bank'></i> قصر فاخر</a></li>
        <li><a href="#"><i class='bx bxs-paint'></i> استوديو صغير</a></li>
        <li><a href="#"><i class='bx bxs-shopping-bag'></i> محل تجاري</a></li>
        <li><a href="#"><i class='bx bxs-box'></i> مستودع</a></li>
        <li><a href="#"><i class='bx bxs-landscape'></i> مساحات خضراء</a></li>
        <li><a href="#"><i class='bx bxs-tree'></i> مزرعة</a></li>
        <li><a href="#"><i class='bx bxs-car'></i> موقف سيارات</a></li>
        <li><a href="#"><i class='bx bxs-beach'></i> منتجع سياحي</a></li>
        <li><a href="#"><i class='bx bxs-coffee'></i> كافيه</a></li>
    </ul>

    <button class="scroll-btn next"><i class='bx bx-chevron-left'></i></button>
</div>

<script>
    const container = document.querySelector(".sort-by-list");

    // التمرير بالسحب
    let isDown = false;
    let startX;
    let scrollLeft;

    container.addEventListener("mousedown", (e) => {
        isDown = true;
        startX = e.pageX - container.offsetLeft;
        scrollLeft = container.scrollLeft;
    });

    container.addEventListener("mouseleave", () => isDown = false);
    container.addEventListener("mouseup", () => isDown = false);

    container.addEventListener("mousemove", (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - container.offsetLeft;
        const walk = (x - startX) * 2;
        container.scrollLeft = scrollLeft - walk;
    });

    // أزرار التمرير
    document.querySelector(".prev").addEventListener("click", () => {
        container.scrollBy({ left: 150, behavior: "smooth" });
    });

    document.querySelector(".next").addEventListener("click", () => {
        container.scrollBy({ left: -150, behavior: "smooth" });
    });

    // تغيير العنصر النشط عند النقر
    document.querySelectorAll('.sort-by-list li').forEach(item => {
        item.addEventListener('click', () => {
            document.querySelectorAll('.sort-by-list li').forEach(li => li.classList.remove('active'));
            item.classList.add('active');
        });
    });
</script>
