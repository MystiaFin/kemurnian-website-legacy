// Function to generate slides
function generateSwiperSlides(swiperElement) {
  const swiperWrapper = swiperElement.querySelector(".swiper-wrapper");

  if (!swiperWrapper) {
    console.error("Swiper wrapper not found!");
    return;
  }

  // Get configuration from data attributes
  const config = {
    folderPath: swiperElement.dataset.folderPath || "./images/",
    imageCount: parseInt(swiperElement.dataset.imageCount) || 10,
    imagePrefix: swiperElement.dataset.imagePrefix || "",
    startIndex: parseInt(swiperElement.dataset.startIndex) || 1,
    fileExtension: swiperElement.dataset.fileExtension || "jpg",
    altText: swiperElement.dataset.altText || "Image",
    imageWidth: parseInt(swiperElement.dataset.imageWidth) || 1080,
    imageHeight: parseInt(swiperElement.dataset.imageHeight) || 1080,
  };

  // Clear existing slides (if any)
  swiperWrapper.innerHTML = "";

  // Generate slides
  for (
    let i = config.startIndex;
    i < config.startIndex + config.imageCount;
    i++
  ) {
    const imagePath = `${config.folderPath}${config.imagePrefix}${i}.${config.fileExtension}`;

    const slide = document.createElement("div");
    slide.className = "swiper-slide";

    slide.innerHTML = `
      <picture>
        <source
          srcset="${imagePath} ${config.imageWidth}w"
          sizes="(max-width: 600px) 100vw, ${config.imageWidth}px"
          type="image/webp"
        />
        <img
          src="${imagePath}"
          alt="${config.altText}"
          decoding="async"
          width="${config.imageWidth}"
          height="${config.imageHeight}"
        />
      </picture>
    `;

    swiperWrapper.appendChild(slide);
  }
}

// Initialize all swipers with data-folder-path attribute
function initDynamicSwipers() {
  const swipers = document.querySelectorAll(".swiper[data-folder-path]");
  swipers.forEach((swiper) => generateSwiperSlides(swiper));
}

// Initialize on DOM ready
if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initDynamicSwipers);
} else {
  initDynamicSwipers();
}

// Export for external use if needed
if (typeof module !== "undefined" && module.exports) {
  module.exports = { generateSwiperSlides, initDynamicSwipers };
}
