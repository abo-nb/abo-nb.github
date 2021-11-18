// Your web app's Firebase configuration
var firebaseConfig = {
apiKey: "AIzaSyCd8SdBj69sWtfXVMi2GLO8eS9Qw4WNZ40",
  authDomain: "ylweb-99dfc.firebaseapp.com",
  databaseURL: "https://ylweb-99dfc-default-rtdb.firebaseio.com",
  projectId: "ylweb-99dfc",
  storageBucket: "ylweb-99dfc.appspot.com",
  messagingSenderId: "1083579962107",
  appId: "1:1083579962107:web:2c1b6d10cae33ce0fd165e",
  measurementId: "G-F1BDVM8TGF"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

// initialize database
const db = firebase.database();

// get user's data
const username = prompt("Please Tell Us Your Name");

// submit form
// listen for submit event on the form and call the postChat function
document.getElementById("message-form").addEventListener("submit", sendMessage);

// send message to db


function sendMessage(e) {


  e.preventDefault();

  // get values to be submitted
  const timestamp = Date.now();
  const messageInput = document.getElementById("message-input");
  const message = messageInput.value;

  // clear the input box
  messageInput.value = "";

  //auto scroll to bottom
  document
    .getElementById("messages")
    .scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });

  // create db collection and send in the data
  db.ref("messages/" + timestamp).set({
    username,
    message,
  });
}

// display the messages
// reference the collection created earlier
const fetchChat = db.ref("messages/");

// check for new messages using the onChildAdded event listener
fetchChat.on("child_added", function (snapshot) {
  const messages = snapshot.val();
  const message = `<li class=${
    username === messages.username ? "sent" : "receive"
  }><span>${messages.username}: </span>${messages.message}</li>`;
  // append the message on the page
  document.getElementById("messages").innerHTML += message;





//登入



});
