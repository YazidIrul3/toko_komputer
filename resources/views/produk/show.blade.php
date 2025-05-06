@extends('layout')
@section('konten')
<section class=" flex flex-col justify-center container mx-auto w-11/12 p-3">
    <div class=" w-full">
        <img class=" w-full min-h-[500px]" src="/images/{{$produk->nama_file}}" alt="" />
    </div>

    <div class=" flex flex-col mt-3 gap-3">
        <div class=" flex flex-row justify-between">
            <h1 class=" text-3xl font-bold text-slate-900">{{$produk -> nama_produk}}</h1>
            <div class=" bg-green-600 rounded-full font-bold text-lg px-4 py-1 items-center flex text-slate-50">
                <h1>{{$produk -> kategori -> nama_kategori}}</h1>
            </div>
        </div>
        <h1 class=" text-4xl font-bold text-red-600">Rp. {{ number_format($produk->harga) }}</h1>
        <p class=" font-semibold text-lg"> Stok : {{$produk -> stok}}</p>
        {{-- <p class=" text-sm">{{$produk -> deskripsi}}</p> --}}
        <p class=" text-sm text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit neque sint laborum ipsum quam obcaecati earum. Nam suscipit sapiente at ipsam, commodi natus nisi. Recusandae quae nisi ex, voluptates corporis molestias? Officiis aut adipisci voluptatum alias voluptates, iure officia praesentium sint ipsum, nesciunt voluptatem in neque et ea ut explicabo amet tempore aliquid laudantium, fuga architecto sequi consequatur culpa laborum! Minima accusamus sint modi facere esse eius sunt impedit nihil dignissimos sit? Voluptate doloribus, sint quo iste illum, culpa et, voluptatum tempore minus nobis illo eveniet quas quaerat laboriosam? Aliquid amet impedit incidunt rerum id! Nobis consectetur quisquam fuga nemo dolore voluptatem enim praesentium maxime saepe, blanditiis perspiciatis deleniti provident exercitationem animi laboriosam dolorum, harum facere optio repellat eaque suscipit rem autem. Amet accusamus dolorum eius aperiam mollitia tempora a explicabo ipsum eos quaerat incidunt corrupti quos quam itaque, nesciunt, magnam iure distinctio velit. Cum, voluptatum vitae rem facere id obcaecati doloribus ea dolorem recusandae sint nihil expedita placeat velit fuga voluptates quas sequi. Consectetur iusto ipsum aspernatur beatae obcaecati quasi aliquam natus consequatur, aut veniam voluptatibus eaque recusandae fugit fuga repellendus? Totam voluptatibus aliquam fuga, magnam praesentium illo. Dolorem porro officia laborum dolore atque quam incidunt recusandae nostrum fugit, molestiae quod voluptas asperiores id accusantium amet ad doloribus laboriosam blanditiis nemo. Non ea omnis hic repellat corrupti reiciendis ab! Nihil excepturi distinctio ab placeat sequi, beatae eos eaque sapiente. Fuga esse debitis est amet suscipit culpa doloribus earum beatae ipsam sunt. Tenetur culpa nisi est nobis repellat recusandae necessitatibus saepe harum eius laboriosam quas rem fugiat, itaque, iusto dolorem delectus, praesentium molestiae quos nam? Tempora, repudiandae quisquam officiis, praesentium similique modi cumque fugiat tenetur et explicabo suscipit? Quos ex voluptatem temporibus autem molestias hic vel maxime animi? Officia pariatur neque accusamus, rerum ex distinctio molestiae provident dolorem, reprehenderit unde porro, ab doloribus quia dolorum. Impedit optio beatae ullam veniam ducimus ad blanditiis. Non, voluptatem dolore tenetur sit sunt delectus fugiat velit doloremque numquam cupiditate quia ullam illo, iure autem ipsa tempora optio amet temporibus eum sint voluptatibus mollitia iste consectetur! Possimus est quos doloribus adipisci molestias animi iure eveniet maxime aspernatur sint dolore impedit, non eos natus voluptas dolorum ea consequuntur blanditiis. Fugit beatae velit adipisci repudiandae maxime, nam consequatur vero. Neque maxime deserunt molestiae consequatur? Labore ducimus nostrum quis et exercitationem. Ex quibusdam officia dolore. Accusamus provident, esse hic magni, rem ex ullam dolorem sapiente, cumque voluptatum ad!</p>
    </div>
</section>
@endsection
