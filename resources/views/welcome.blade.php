@include('partials.header')

<div class="container mx-auto p-8">
    <table class="table-auto w-full font-serif text-sm text-left rtl:text-right">
        <thead class="uppercase">
            <tr>
                <th class="px-4 py-2 border border-gray-300">ID</th>
                <th class="px-4 py-2 border border-gray-300">ISBN</th>
                <th class="px-4 py-2 border border-gray-300">Title</th>
                <th class="px-4 py-2 border border-gray-300">Author</th>
                <th class="px-4 py-2 border border-gray-300">Description</th>
                <th class="px-4 py-2 border border-gray-300">Date Published</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td class="px-4 py-2 border border-gray-300">{{ $book->id }}</td>
                    <td class="px-4 py-2 border border-gray-300 font-bold">{{ $book->isbn }}</td>
                    <td class="px-4 py-2 border border-gray-300">{{ $book->title }}</td>
                    <td class="px-4 py-2 border border-gray-300 italic">{{ $book->author }}</td>
                    <td class="px-4 py-2 border border-gray-300">{{ $book->description }}</td>
                    <td class="px-4 py-2 border border-gray-300">{{ $book->date_published }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@include('partials.footer')