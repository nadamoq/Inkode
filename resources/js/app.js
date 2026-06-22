//import Echo from 'laravel-echo';
import './echo';

Echo.private(`App.Models.User.${User_ID}`).notification(function (data){
    alert(data.body)
})
Echo.private(`posts.${User_ID}`).listen('PostViewed',function($post){
    alert('Post Viewed'.$post)
})