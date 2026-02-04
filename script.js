// script.js

document.addEventListener("DOMContentLoaded", () => {

    // 🔹 Галерея изображений
    const galleryImages = document.querySelectorAll(".gallery img");
    galleryImages.forEach(img => {
        img.addEventListener("click", () => {
            const overlay = document.createElement("div");
            overlay.style.position = "fixed";
            overlay.style.top = "0";
            overlay.style.left = "0";
            overlay.style.width = "100%";
            overlay.style.height = "100%";
            overlay.style.backgroundColor = "rgba(0,0,0,0.85)";
            overlay.style.display = "flex";
            overlay.style.justifyContent = "center";
            overlay.style.alignItems = "center";
            overlay.style.cursor = "pointer";
            overlay.style.zIndex = "1000";
            overlay.innerHTML = `<img src="${img.src}" style="max-width:90%; max-height:90%; border-radius:12px;">`;
            document.body.appendChild(overlay);

            overlay.addEventListener("click", () => {
                document.body.removeChild(overlay);
            });
        });
    });

    // 🔹 Фильтр категорий
    const categoryButtons = document.querySelectorAll(".category-filter button");
    const topicItems = document.querySelectorAll(".topic-item");

    categoryButtons.forEach(btn => {
        btn.addEventListener("click", () => {
            const category = btn.dataset.category;
            topicItems.forEach(topic => {
                if(category === "all" || topic.dataset.category === category) {
                    topic.style.display = "block";
                } else {
                    topic.style.display = "none";
                }
            });
        });
    });

    // 🔹 Подтверждение удаления темы
    const deleteButtons = document.querySelectorAll(".delete-topic");
    deleteButtons.forEach(btn => {
        btn.addEventListener("click", (e) => {
            const title = btn.dataset.title;
            if(!confirm(`Вы точно хотите удалить тему "${title}"?`)) {
                e.preventDefault();
            }
        });
    });

});
