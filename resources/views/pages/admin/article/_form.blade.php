<x-admin-layout>
    <x-slot name="title">{{ isset($article) ? 'Edit Article' : 'Tambah Article' }}</x-slot>

    @include('plugin.ckeditorartikel')

    <div class="space-y-6">
        <!-- Breadcrumb -->
        <div class="flex items-center text-sm text-gray-600">
            <a href="/" class="hover:text-gray-900">Home</a>
            <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <a href="{{ route('articles.index') }}" class="hover:text-gray-900">Data Article</a>
            <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <span class="text-gray-900">{{ isset($article) ? 'Edit' : 'Tambah' }}</span>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 px-6 py-4">
                <h3 class="text-xl font-bold text-gray-900">
                    {{ isset($article) ? 'Edit Article' : 'Tambah Article Baru' }}
                </h3>
                <p class="text-sm text-gray-700 mt-1">
                    Isi form di bawah ini untuk {{ isset($article) ? 'mengupdate' : 'membuat' }} article
                </p>
            </div>

            <form action="{{ isset($article) ? route('articles.update', $article->id) : route('articles.store') }}" 
                  method="POST" 
                  enctype="multipart/form-data" 
                  class="p-6 space-y-6"
                  id="article-form">
                @csrf
                @if(isset($article))
                    @method('PUT')
                @endif

                <!-- Row 1: Title and Slug -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Title -->
                    <div>
                        <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
                            Judul Article <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               name="title" 
                               id="title" 
                               value="{{ old('title', $article->title ?? '') }}"
                               placeholder="Masukkan judul article..."
                               required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition">
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Slug -->
                    <div>
                        <label for="slug" class="block text-sm font-semibold text-gray-700 mb-2">
                            Slug <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               name="slug" 
                               id="slug" 
                               value="{{ old('slug', $article->slug ?? '') }}"
                               placeholder="judul-article-akan-otomatis"
                               required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition bg-gray-50">
                        @error('slug')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Row 2: Category and Status -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Category -->
                    <div>
                        <label for="category" class="block text-sm font-semibold text-gray-700 mb-2">
                            Kategori <span class="text-red-500">*</span>
                        </label>
                        <select name="category" 
                                id="category" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition">
                            <option value="">Pilih Kategori</option>
                            <option value="news" {{ old('category', $article->category ?? '') == 'news' ? 'selected' : '' }}>Berita</option>
                            <option value="tutorial" {{ old('category', $article->category ?? '') == 'tutorial' ? 'selected' : '' }}>Tutorial</option>
                            <option value="announcement" {{ old('category', $article->category ?? '') == 'announcement' ? 'selected' : '' }}>Pengumuman</option>
                            <option value="tips" {{ old('category', $article->category ?? '') == 'tips' ? 'selected' : '' }}>Tips & Trik</option>
                            <option value="event" {{ old('category', $article->category ?? '') == 'event' ? 'selected' : '' }}>Event</option>
                            <option value="application" {{ old('category', $article->category ?? '') == 'application' ? 'selected' : '' }}>Aplikasi</option>
                        </select>
                        @error('category')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Status -->
                    <div>
                        <label for="status" class="block text-sm font-semibold text-gray-700 mb-2">
                            Status <span class="text-red-500">*</span>
                        </label>
                        <select name="status" 
                                id="status" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition">
                            <option value="draft" {{ old('status', $article->status ?? 'draft') == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="published" {{ old('status', $article->status ?? '') == 'published' ? 'selected' : '' }}>Published</option>
                        </select>
                        @error('status')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Featured Image -->
                <div>
                    <label for="featured_image" class="block text-sm font-semibold text-gray-700 mb-2">
                        Gambar Unggulan
                    </label>
                    <div class="mt-2 flex items-center space-x-4">
                        <div class="flex-shrink-0" id="preview-container" style="{{ isset($article) && $article->featured_image ? '' : 'display: none;' }}">
                            <img id="image-preview" 
                                 src="{{ isset($article) && $article->featured_image ? asset('storage/'.$article->featured_image) : '' }}" 
                                 alt="Preview" 
                                 class="h-32 w-32 object-cover rounded-lg border-2 border-gray-300">
                        </div>
                        <div class="flex-1">
                            <input type="file" 
                                   name="featured_image" 
                                   id="featured_image" 
                                   accept="image/*"
                                   onchange="previewImage(event)"
                                   class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100 transition">
                            <p class="mt-2 text-xs text-gray-500">PNG, JPG, JPEG maksimal 2MB</p>
                        </div>
                    </div>
                    @error('featured_image')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Excerpt -->
                <div>
                    <label for="excerpt" class="block text-sm font-semibold text-gray-700 mb-2">
                        Kutipan <span class="text-gray-400">(Ringkasan singkat)</span>
                    </label>
                    <textarea name="excerpt" 
                              id="excerpt" 
                              rows="3"
                              placeholder="Tulis ringkasan singkat article..."
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition">{{ old('excerpt', $article->excerpt ?? '') }}</textarea>
                    @error('excerpt')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Content -->
                <div>
                    <label for="content" class="block text-sm font-semibold text-gray-700 mb-2">
                        Konten Article <span class="text-red-500">*</span>
                    </label>
                    <textarea name="content" 
                              id="content" 
                              rows="15"
                              placeholder="Tulis konten article di sini...">{{ old('content', $article->content ?? '') }}</textarea>
                    <p class="mt-2 text-xs text-gray-500">Gunakan toolbar editor untuk formatting</p>
                    @error('content')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tags -->
                <div>
                    <label for="tags-input" class="block text-sm font-semibold text-gray-700 mb-2">
                        Tags <span class="text-gray-400">(Tekan Enter atau koma untuk menambah)</span>
                    </label>
                    <div class="w-full px-4 py-3 border border-gray-300 rounded-lg focus-within:ring-2 focus-within:ring-yellow-500 focus-within:border-transparent transition min-h-[3rem] flex flex-wrap gap-2 items-center" id="tags-container">
                        <input type="text" 
                               id="tags-input" 
                               placeholder="Ketik tag dan tekan Enter"
                               class="flex-1 min-w-[150px] outline-none border-0 p-0 focus:ring-0">
                    </div>
                    <input type="hidden" name="tags" id="tags" value="{{ old('tags', $article->tags ?? '') }}">
                    @error('tags')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- SEO Info -->
                <div class="border-t border-gray-200 pt-6">
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">SEO Settings</h4>
                    <p class="text-sm text-gray-600">
                        Meta Title akan otomatis menggunakan <strong>Judul Article</strong>, dan Meta Description akan menggunakan <strong>Kutipan</strong>.
                    </p>
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center justify-between pt-6 border-t border-gray-200">
                    <a href="{{ route('articles.index') }}" 
                       class="px-6 py-3 bg-gray-200 text-gray-700 font-medium rounded-lg hover:bg-gray-300 transition-colors flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Kembali
                    </a>

                    <div class="flex space-x-4">
                        @if(isset($article))
                            <button type="submit" 
                                    name="action" 
                                    value="save"
                                    class="px-6 py-3 bg-yellow-500 text-gray-900 font-semibold rounded-lg hover:bg-yellow-600 transition-colors flex items-center shadow-lg">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Update Article
                            </button>
                        @else
                            <button type="submit" 
                                    name="action" 
                                    value="draft"
                                    onclick="setStatusDraft()"
                                    class="px-6 py-3 bg-gray-600 text-white font-semibold rounded-lg hover:bg-gray-700 transition-colors flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/>
                                </svg>
                                Simpan sebagai Draft
                            </button>
                            <button type="submit" 
                                    name="action" 
                                    value="publish"
                                    onclick="setStatusPublished()"
                                    class="px-6 py-3 bg-yellow-500 text-gray-900 font-semibold rounded-lg hover:bg-yellow-600 transition-colors flex items-center shadow-lg">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Publish Article
                            </button>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Auto-generate slug from title
        document.getElementById('title').addEventListener('input', function(e) {
            let slug = e.target.value
                .toLowerCase()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-')
                .trim();
            document.getElementById('slug').value = slug;
        });

        // Image preview
        function previewImage(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('image-preview').src = e.target.result;
                    document.getElementById('preview-container').style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        }

        // Tags functionality
        const tagsInput = document.getElementById('tags-input');
        const tagsContainer = document.getElementById('tags-container');
        const tagsHidden = document.getElementById('tags');
        let tags = [];

        // Load existing tags
        const existingTags = tagsHidden.value;
        if (existingTags) {
            tags = existingTags.split(',').map(t => t.trim()).filter(t => t);
            renderTags();
        }

        tagsInput.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ',') {
                e.preventDefault();
                addTag();
            } else if (e.key === 'Backspace' && tagsInput.value === '' && tags.length > 0) {
                removeTag(tags.length - 1);
            }
        });

        tagsInput.addEventListener('blur', function() {
            if (tagsInput.value.trim()) {
                addTag();
            }
        });

        function addTag() {
            const value = tagsInput.value.trim().replace(/,$/g, '');
            if (value && !tags.includes(value)) {
                tags.push(value);
                renderTags();
                updateHiddenInput();
            }
            tagsInput.value = '';
        }

        function removeTag(index) {
            tags.splice(index, 1);
            renderTags();
            updateHiddenInput();
        }

        function renderTags() {
            const existingChips = tagsContainer.querySelectorAll('.tag-chip');
            existingChips.forEach(chip => chip.remove());

            tags.forEach((tag, index) => {
                const chip = document.createElement('span');
                chip.className = 'tag-chip inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800 border border-yellow-300';
                chip.innerHTML = `
                    ${tag}
                    <button type="button" onclick="removeTag(${index})" class="ml-2 text-yellow-600 hover:text-yellow-800 focus:outline-none">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                `;
                tagsContainer.insertBefore(chip, tagsInput);
            });
        }

        function updateHiddenInput() {
            tagsHidden.value = tags.join(', ');
        }

        // Make removeTag available globally
        window.removeTag = removeTag;

        // Set status based on button clicked
        function setStatusDraft() {
            document.getElementById('status').value = 'draft';
        }

        function setStatusPublished() {
            document.getElementById('status').value = 'published';
        }
    </script>
</x-admin-layout>
