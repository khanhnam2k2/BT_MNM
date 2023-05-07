<x-guest-layout>
    <div class="container py-4">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Post</h1>
                <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title) }}" required>
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="abstract">Abstract</label>
                        <textarea name="abstract"  id="abstract" class="form-control @error('abstract') is-invalid @enderror" required>{{ old('abstract', $post->abstract) }}</textarea>
                        @error('abstract')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" rows="10" id="content" class="form-control @error('content') is-invalid @enderror" required>{{ old('content', $post->content) }}</textarea>
                        @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control-file @error('image') is-invalid @enderror">
                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        @if($post->image)
                        <div class="mt-3">
                            <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="img-thumbnail" width="400px">
                        </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>