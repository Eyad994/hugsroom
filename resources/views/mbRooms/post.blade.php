@if($post->isLikedBy(auth()->user()))
    <button class="btn like_btn"><i class="fa fa-heart"></i></button>
@else
    <button class="btn like_btn" style="color: unset"><i class="fa fa-heart"></i></button>
@endif
<div class="how_liked" id="postLikesCount">{{ isset($postLikes) ? $postLikes : 0 }} Hearts</div>