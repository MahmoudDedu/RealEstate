<!-- Boxicons CDN -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<style>
    .sort-by-container {
        position: relative;
        width: 100%;
        overflow: hidden;
        padding: 10px 0;
    }

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

    .sort-by-list::-webkit-scrollbar {
        display: none;
    }

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

    .sort-by-list li:hover {
        background: #f1f1f1;
        transform: translateY(-3px);
    }

    .sort-by-list li.active {
        background: #FDC600;
        color: #fff;
    }

    .sort-by-list li.active a {
        color: #fff;
    }

    .sort-by-list a {
        display: flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

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

    .prev {
        left: 10px;
    }

    .next {
        right: 10px;
    }
</style>

<div class="sort-by-container">
    <button class="scroll-btn prev"><i class='bx bx-chevron-left'></i></button>
    <ul class="sort-by-list">
        <li class="active"><a href="#"><i class='bx bxs-building-house'></i> House</a></li>
        <li><a href="#"><i class='bx bxs-castle'></i> Villa</a></li>
        <li><a href="#"><i class='bx bxs-store'></i> Shop</a></li>
        <li><a href="#"><i class='bx bxs-hotel'></i> Hotel</a></li>
        <li><a href="#"><i class='bx bxs-briefcase'></i> Office</a></li>
        <li><a href="#"><i class='bx bxs-home'></i> Apartment</a></li>
        <li><a href="#"><i class='bx bxs-building'></i> Commercial</a></li>
        <li><a href="#"><i class='bx bxs-factory'></i> Industrial</a></li>
        <li><a href="#"><i class='bx bxs-tree'></i> Land</a></li>
        <li><a href="#"><i class='bx bxs-garage'></i> Garage</a></li>
    </ul>
    <button class="scroll-btn next"><i class='bx bx-chevron-right'></i></button>
</div>

<script>
    const container = document.querySelector(".sort-by-list");

    // Drag to scroll
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

    // Scroll buttons
    document.querySelector(".prev").addEventListener("click", () => {
        container.scrollBy({ left: -150, behavior: "smooth" });
    });

    document.querySelector(".next").addEventListener("click", () => {
        container.scrollBy({ left: 150, behavior: "smooth" });
    });

    // Active item toggle
    document.querySelectorAll('.sort-by-list li').forEach(item => {
        item.addEventListener('click', () => {
            document.querySelectorAll('.sort-by-list li').forEach(li => li.classList.remove('active'));
            item.classList.add('active');
        });
    });
</script>
