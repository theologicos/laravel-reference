<div>
    <label for="name">Name</label>

    <input type="text" id="name" name="name" value="{{ old('name', $department->name ?? '') }}" required>

    @error('name')
        <p>{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="code">Code</label>

    <input type="text" id="code" name="code" value="{{ old('code', $department->code ?? '') }}" required>

    @error('code')
        <p>{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="description">Description</label>

    <textarea id="description" name="description">{{ old('description', $department->description ?? '') }}</textarea>

    @error('description')
        <p>{{ $message }}</p>
    @enderror
</div>

<button type="submit">Save Department</button>