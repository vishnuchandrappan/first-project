<div class="col-md-6">
  <a href="/posts/{{ $post->id }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
    <img src="/images/img_5.jpg" alt="Image placeholder">
    <div class="blog-content-body">
      <div class="post-meta">
        <span class="author mr-2"><img src="/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
        <span class="mr-2 text-dark"> {{ $post->created_at->toFormattedDateString() }} </span> &bullet;
        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
      </div>
      <h2> {{ $post->title }} </h2>
    </div>
  </a>
</div>
