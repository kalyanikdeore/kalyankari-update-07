@extends('index')

@section('main')

<x-breadscrumb pageName="Gallery" />

<section class="px-4 py-5" x-data="{
    year: 2021,
    showModal: false,
    currentImg: '',
    currentCaption: '',
    galleries: [
        // 2020 - 6 images
        { year: 2020, image: 'https://source.unsplash.com/800x600/?nature,forest', caption: 'Forest 2020' },
        { year: 2020, image: 'https://source.unsplash.com/800x600/?sunrise', caption: 'Sunrise 2020' },
        { year: 2020, image: 'https://source.unsplash.com/800x600/?snow', caption: 'Snow 2020' },
        { year: 2020, image: 'https://source.unsplash.com/800x600/?cave', caption: 'Cave 2020' },
        { year: 2020, image: 'https://source.unsplash.com/800x600/?hill', caption: 'Hill 2020' },
        { year: 2020, image: 'https://source.unsplash.com/800x600/?rocks', caption: 'Rocks 2020' },

        // 2021 - 10 images
        { year: 2021, image: 'https://source.unsplash.com/800x600/?nature,water', caption: 'Waterfall' },
        { year: 2021, image: 'https://source.unsplash.com/800x600/?nature,mountain', caption: 'Mountain' },
        { year: 2021, image: 'https://source.unsplash.com/800x600/?forest', caption: 'Forest' },
        { year: 2021, image: 'https://source.unsplash.com/800x600/?sunset', caption: 'Sunset' },
        { year: 2021, image: 'https://source.unsplash.com/800x600/?river', caption: 'River' },
        { year: 2021, image: 'https://source.unsplash.com/800x600/?lake', caption: 'Lake' },
        { year: 2021, image: 'https://source.unsplash.com/800x600/?sky', caption: 'Sky' },
        { year: 2021, image: 'https://source.unsplash.com/800x600/?beach', caption: 'Beach' },
        { year: 2021, image: 'https://source.unsplash.com/800x600/?mountains', caption: 'Mountain View' },
        { year: 2021, image: 'https://source.unsplash.com/800x600/?desert', caption: 'Desert' },

        // 2022 - 5 images
        { year: 2022, image: 'https://source.unsplash.com/800x600/?trees', caption: 'Trees' },
        { year: 2022, image: 'https://source.unsplash.com/800x600/?ocean', caption: 'Ocean' },
        { year: 2022, image: 'https://source.unsplash.com/800x600/?flowers', caption: 'Flowers' },
        { year: 2022, image: 'https://source.unsplash.com/800x600/?clouds', caption: 'Clouds' },
        { year: 2022, image: 'https://source.unsplash.com/800x600/?valley', caption: 'Valley' },

        // 2023 - 4 images
        { year: 2023, image: 'https://source.unsplash.com/800x600/?fog', caption: 'Fog 2023' },
        { year: 2023, image: 'https://source.unsplash.com/800x600/?rain', caption: 'Rain 2023' },
        { year: 2023, image: 'https://source.unsplash.com/800x600/?autumn', caption: 'Autumn 2023' },
        { year: 2023, image: 'https://source.unsplash.com/800x600/?meadow', caption: 'Meadow 2023' },

        // 2024 - 3 images
        { year: 2024, image: 'https://source.unsplash.com/800x600/?cliff', caption: 'Cliff 2024' },
        { year: 2024, image: 'https://source.unsplash.com/800x600/?wildlife', caption: 'Wildlife 2024' },
        { year: 2024, image: 'https://source.unsplash.com/800x600/?island', caption: 'Island 2024' },

        // 2025 - 4 images
        { year: 2025, image: 'https://source.unsplash.com/800x600/?ice', caption: 'Ice 2025' },
        { year: 2025, image: 'https://source.unsplash.com/800x600/?volcano', caption: 'Volcano 2025' },
        { year: 2025, image: 'https://source.unsplash.com/800x600/?canyon', caption: 'Canyon 2025' },
        { year: 2025, image: 'https://source.unsplash.com/800x600/?aurora', caption: 'Aurora 2025' }
    ],

    getImages() {
        return this.galleries.filter(g => g.year === this.year);
    }
}">
  <!-- Year Buttons -->
  <div class="flex flex-wrap justify-center gap-2 mb-6">
    <template x-for="y in [2020, 2021, 2022, 2023, 2024, 2025]" :key="y">
      <button @click="year = y"
              :class="{
                'bg-blue-600 text-white': year === y,
                'bg-gray-300 text-black': year !== y
              }"
              class="px-4 py-2 rounded font-semibold transition">
        <span x-text="y"></span>
      </button>
    </template>
  </div>

  <!-- Empty State -->
  <div x-show="getImages().length === 0" class="text-center py-10">
    <p class="text-gray-500">No images available for this year.</p>
  </div>

  <!-- Image Grid -->
  <div class="grid grid-cols-2 md:grid-cols-4 gap-3"
       x-show="getImages().length > 0">
    <template x-for="(image, index) in getImages()" :key="index">
      <div class="rounded overflow-hidden shadow cursor-pointer hover:shadow-lg transition"
           @click="currentImg = image.image; currentCaption = image.caption; showModal = true">
        <img :src="image.image"
             class="w-full h-52 object-cover hover:scale-105 transition-transform"
             :alt="image.caption"
             loading="lazy">
      </div>
    </template>
  </div>

  <!-- Image Modal -->
  <div x-show="showModal"
       x-transition.opacity.duration.200ms
       @keydown.window.escape="showModal = false"
       class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm">

    <div @click.away="showModal = false"
         x-transition.scale.duration.200ms
         class="relative bg-white rounded-lg shadow-2xl ring-1 ring-gray-200 flex flex-col items-center justify-center p-4"   style="width: 555px; height: 525px;">

      <button @click="showModal = false"
              class="absolute top-1 right-1 text-gray-600 hover:text-black">
        <svg xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="2"
             stroke-linecap="round"
             stroke-linejoin="round"
             class="w-5 h-5" style="    margin-top: -247px;
    margin-left: 488px;">
          <line x1="18" y1="6" x2="6" y2="18" />
          <line x1="6" y1="6" x2="18" y2="18" />
        </svg>
      </button>

      <img :src="currentImg"
           alt="Preview"
           class="w-[300px] h-[300px] object-contain rounded mt-4">
      <p x-text="currentCaption" class="mt-2 text-center text-gray-600"></p>
    </div>
  </div>
</section>

@include('includes.newsletter')

@endsection
