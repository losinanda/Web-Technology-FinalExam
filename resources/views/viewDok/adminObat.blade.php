@extends('viewDok.Main')
@section('container')
<br>
<div class="flex justify-start">
  <div class="  bg-blue-800/80 hover:bg-blue-800/90 px-1 py-1  ml-4 rounded-md text-white font-medium tracking-wider transition">
    <a href="/create" class=" px-4" >Add</a>
  </div>
</div>


  <table class="table-bordered table ml-4 mr-4 mt-4 ">
    <tr>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Toko</th>
        <th>Kategori</th>
        <th colspan="2">AKSI</th>
    </tr>
    @foreach ($posts as $key=>$value)
        <tr>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->harga }}</td>
            <td>{{ $value->toko }}</td>
            <td>{{ $value->category->name_cat }}</td>
            <td> <a href="/edit/{{$value->id}}" class="btn btn-info">Update</a></td>
            <td>
              <form action="/Adminobat/{{ $value->id }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn bg-red-700 text-white " type="submit">Delete</button>
              </form>
            </td>
        </tr>
    @endforeach 
  </table>
@endsection