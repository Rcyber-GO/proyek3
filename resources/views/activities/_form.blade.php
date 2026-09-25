<div>
    <label for="title">Judul</label>
    <input
        id="title"
        name="title"
        type="text"
        value="{{ old('title', $activity->title ?? '') }}"
    >
    @error('title')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="description">Deskripsi</label>
    <textarea id="description" name="description">{{ old('description', $activity->description ?? '') }}</textarea>
    @error('description')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="activity_date">Tanggal Kegiatan</label>
    <input
        id="activity_date"
        name="activity_date"
        type="date"
        value="{{ old('activity_date', isset($activity) ? $activity->activity_date->format('Y-m-d') : '') }}"
    >
    @error('activity_date')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="category">Kategori</label>
    <input
        id="category"
        name="category"
        type="text"
        value="{{ old('category', $activity->category ?? '') }}"
    >
    @error('category')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="status">Status</label>
    <select name="status" id="status">
        @foreach (['Planned', 'Ongoing', 'Done'] as $statusOption)
            <option
                value="{{ $statusOption }}"
                @selected(old('status', $activity->status ?? 'Planned') === $statusOption)
            >
                {{ $statusOption }}
            </option>
        @endforeach
    </select>
    @error('status')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

<button type="submit">Simpan</button>