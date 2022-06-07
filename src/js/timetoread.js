
function updateMeta(timetoread) {
  let postid = document.querySelector('.postID').innerText;
  jQuery.ajax({
    method: 'post',
    url: ajaxurl,
    data: {
      'time_var': timetoread,
      'post_id': postid,
      'action': 'update_time_read_action',
    }
  }).success(function (msg) {
    console.log('time read updated');
  });
}

function readingTime() {
  const text = document.querySelector('.single .content').innerText;
  const wpm = 225;
  const words = text.trim().split(/\s+/).length;
  const time = Math.ceil(words / wpm);
  document.querySelector('.post-time-read span').innerText = time;

  //Update Meta
  updateMeta(time);
}
if (document.body.classList.contains('single')) {
  readingTime();
}