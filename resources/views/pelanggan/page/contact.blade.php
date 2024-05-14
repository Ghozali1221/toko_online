<!-- ini artinya file ini akan di panggil/digunakan di dalam file index, sesuai path yang ada di bawah ini  -->
@extends('pelanggan.layout.index')

<!-- nama section('content') ini harus sesuai dengan nama nya pada file index.blade.php -->
@section('content')
<div class="row mt-2 align-items-center">
 <div class="col-md-6 mb-4">
  <div class="content-text">
   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum voluptatum veniam delectus, dicta vel sint labore iure esse odit debitis, quis expedita illo deserunt nobis exercitationem id voluptas dignissimos aliquam assumenda eaque cumque unde ipsum? Eum, voluptatum? Dolore atque harum perferendis exercitationem vitae laudantium nisi voluptates odit? Eligendi odit hic cupiditate suscipit, amet ipsam repellendus libero in. Delectus voluptates nostrum quisquam explicabo ut magnam enim, similique error facere temporibus eveniet eius earum odit omnis expedita quaerat soluta? Reprehenderit sequi corporis ex at eos cumque magni excepturi iste deserunt nostrum harum architecto laborum consequuntur non ducimus, mollitia accusantium hic numquam? Commodi ipsam nisi architecto illum optio, amet recusandae exercitationem cumque? Hic, ut corporis! Incidunt reiciendis earum aliquid totam explicabo architecto vitae perspiciatis, animi possimus expedita ut aspernatur temporibus corporis tempore corrupti eveniet distinctio, quis, necessitatibus consequuntur culpa? Vel veritatis sit eum eligendi reiciendis ut ab adipisci sed, distinctio magnam ducimus, corporis neque sunt voluptates tempora rerum consectetur? Ipsam similique, cumque accusantium quam natus consequatur dignissimos ipsum magnam, perspiciatis voluptatibus error sed quis corrupti ipsa illum incidunt accusamus cupiditate eligendi officia quas modi optio quidem! Expedita enim eligendi et. Nesciunt, expedita. Reprehenderit dolores dicta eveniet modi ipsa! Excepturi veritatis temporibus recusandae doloremque sapiente non possimus eveniet. Quo perspiciatis quibusdam adipisci, doloribus mollitia officia recusandae excepturi vero quas aspernatur perferendis nobis autem libero? Deserunt iste, temporibus soluta architecto dolores quam sapiente omnis quas quos veniam repellat quidem assumenda optio animi maxime obcaecati odio! Magni tenetur totam ex numquam mollitia, dolor sequi itaque exercitationem fuga error, vitae laboriosam architecto at aliquam doloremque deserunt atque porro, dolores consectetur. Cum nostrum qui eaque soluta ipsam exercitationem autem dolor non porro similique est ullam voluptatibus explicabo fugit, voluptatum eius saepe minima nam quasi pariaturlaboriosam earum quos, possimus sint tempora! Ea itaque consequatur similique minima ad doloremque veniam optio totam unde omnis corporis quos natus assumenda deleniti facilis, inventore laboriosam explicabo fuga debitis ab, ex animi doloribus quibusdam! Velit asperiores amet numquam eveniet harum et quibusdam dolore dignissimos similique commodi tempore minus quis dolor obcaecati impedit corporis assumo harum dolores, dignissimos optio deleniti cumque voluptatum? Rerum iusto recusandae, eius nostrum possimus necessitatibus natus nulla sapiente maxime praesentium ducimus vero non architecto neque facilis alias. Nisi enim quod facilis, quo eos itaque fuga. Dicta nihil fuorporis! Repellendus, blanditiis? Aliquid iusto molestias doloribus doloremque alias.
  </div>
 </div>
 <div class="col-md-6">
  <img src="{{asset('assets/images/building.jpg')}}" width="120%" height="auto" alt="">
 </div>
</div>

<div class="d-flex justify-content-evenly my-3">
 <div>
  <i class="fa fa-users"> </i> 2.500 Pelanggan
 </div>
 <div>
  <i class="fas fa-home"> </i> 5.000 Penjualan
 </div>
 <div>
  <i class="fas fa-tshirt"> </i> 241 Produk
 </div>
</div>

<h5 class="text-center"><b> Please Contact us </b></h5>
<hr class="mb-4">
<div class="row mb-md-4">
 <div class="col-md-5">
  <div class="bg-secondary" style="inline-size: 100%; block-size: 50vh; border-radius: 15px;"></div>
 </div>

 <div class="col-md-7">
  <div class="card">
   <div class="card-header">
    <h5 class="text-center"><b> Criticism and Suggestions </b></h5>
   </div>
   <div class="card-body">
    <div class="mb-3 row">
     <label for="email" class="col-sm-2 col-form-label">Email </label>
     <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="email" value="admin@info.com">
     </div>
    </div>
    <div class="mb-3 row">
     <label for="pesan" class="col-sm-2 col-form-label">Message </label>
     <div class="col-sm-10">
      <textarea class="form-control" id="pesan" name="pesan"></textarea>
     </div>
    </div>
    <div class="col-auto">
     <button type="submit" class="btn btn-primary mb-3">Send Message</button>
    </div>
   </div>
  </div>
 </div>

</div>
@endsection
