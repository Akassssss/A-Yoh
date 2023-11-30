
const allHoverImages = document.querySelectorAll('.hover-container div img');
const imgContainer = document.querySelector('.img-container');

window.addEventListener('DOMContentLoaded', () => {
    allHoverImages[0].parentElement.classList.add('active');
});

allHoverImages.forEach((image) => {
    image.addEventListener('mouseover', () =>{
        imgContainer.querySelector('img').src = image.src;
        resetActiveImg();
        image.parentElement.classList.add('active');
    });
});

function resetActiveImg(){
    allHoverImages.forEach((img) => {
        img.parentElement.classList.remove('active');
    });
}

function kepro(){
  return window.location.href ="/product"
}

 function kevid(){
    return window.parent.location.href ="/pideo"
}

    
function video() {
    var newSrc ="{{ url('/video') }}";
    document.getElementById("MyFrame").src=newSrc; 
}
function merch() {
    document.getElementById("MyFrame").src="{{ url('/merch') }}"; 
}



// Get the elements we want to interact with
const likeButton = document.getElementById("like-button");
const dislikeButton = document.getElementById("dislike-button");
const likeCount = document.getElementById("like-count");
const dislikeCount = document.getElementById("dislike-count");
const shareButtons = document.querySelectorAll(".share-button");

// Add event listeners to the like and dislike buttons
likeButton.addEventListener("click", () => {
  // Increase the like count by 1 and update the display
  const currentCount = parseInt(likeCount.innerText);
  likeCount.innerText = currentCount + 1;
});

dislikeButton.addEventListener("click", () => {
  // Increase the dislike count by 1 and update the display
  const currentCount = parseInt(dislikeCount.innerText);
  dislikeCount.innerText = currentCount + 1;
});

// Add event listeners to the share buttons
shareButtons.forEach((button) => {
  button.addEventListener("click", (event) => {
    // Prevent the default behavior of the click event (i.e. following a link)
    event.preventDefault();

    // Get the URL of the current page and the social media platform to share on
    const url = window.location.href;
    const platform = button.getAttribute("data-platform");

    // Use the platform and URL to construct a share URL
    const shareUrl = getShareUrl(platform, url);

    // Open the share URL in a new window
    window.open(shareUrl, "_blank");
  });
});

// Helper function to construct share URLs
function getShareUrl(platform, url) {
  switch (platform) {
    case "facebook":
      return `https://www.facebook.com/sharer/sharer.php?u=${url}`;
    case "twitter":
      return `https://twitter.com/share?url=${url}`;
    case "pinterest":
      return `https://www.pinterest.com/pin/create/button/?url=${url}`;
    default:
      return null;
  }
}


fetch(`https://www.googleapis.com/youtube/v3/videos?id=${videoId}&part=snippet&key=YOUR_API_KEY`)
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    const video = data.items[0];
    const description = video.snippet.description;
    const descriptionElement = document.getElementById("description");
    descriptionElement.innerText = description;
  })
  .catch((error) => {
    console.error("Error retrieving video details: ", error);
  });

  const videoUrl = window.location.href;
const videoId = videoUrl.split("v=")[1];

const commentsList = document.getElementById("comments-list");

// Create an array of example comments
const exampleComments = [
  {
    author: "John Doe",
    text: "This video is amazing!",
    avatar: "https://via.placeholder.com/50"
  },
  {
    author: "Jane Smith",
    text: "Thanks for sharing! I really enjoyed this.",
    avatar: "https://via.placeholder.com/50"
  },
  {
    author: "Bob Johnson",
    text: "I found this very helpful. Thanks!",
    avatar: "https://via.placeholder.com/50"
  }
];

// Display the example comments
exampleComments.forEach(comment => {
  const commentElement = createCommentElement(comment);
  commentsList.appendChild(commentElement);
});

// Create a new comment and add it to the comments list
const addComment = () => {
  const commentText = document.getElementById("comment-text").value;
  const newComment = {
    author: "Anonymous",
    text: commentText,
    avatar: "https://via.placeholder.com/50"
  };
  const commentElement = createCommentElement(newComment);
  commentsList.appendChild(commentElement);
  document.getElementById("comment-text").value = "";
};

// Create a comment element from the comment object
const createCommentElement = comment => {
  const commentElement = document.createElement("li");
  commentElement.classList.add("comment");
  commentElement.innerHTML = `
    <img src="${comment.avatar}" alt="Comment author's avatar" class="comment-avatar">
    <div class="comment-details">
      <h4 class="comment-author">${comment.author}</h4>
      <p class="comment-text">${comment.text}</p>
    </div>
  `;
  return commentElement;
};

// Add an event listener to the comment form
const commentForm = document.querySelector("form");
commentForm.addEventListener("submit", event => {
  event.preventDefault();
  addComment();
});
