const express = require('express');
const http = require('http');
const socketIo = require('socket.io');
const mongoose = require('mongoose');

const app = express();
const server = http.createServer(app);
const io = socketIo(server);

// اتصال به MongoDB
mongoose.connect('mongodb://localhost/chatApp', {
    useNewUrlParser: true,
    useUnifiedTopology: true
});

// مدل کاربر
const UserSchema = new mongoose.Schema({
    username: String,
    avatar: String,
    friends: [String]
});

const User = mongoose.model('User', UserSchema);

// مدل پیام
const MessageSchema = new mongoose.Schema({
    sender: String,
    receiver: String,
    text: String,
    timestamp: { type: Date, default: Date.now }
});

const Message = mongoose.model('Message', MessageSchema);

app.use(express.static('public'));

io.on('connection', (socket) => {
    console.log('A user connected');

    socket.on('register', async (data) => {
        const user = new User(data);
        await user.save();
        socket.emit('registerSuccess', user);
    });

    socket.on('sendMessage', async (data) => {
        const message = new Message(data);
        await message.save();
        io.emit('newMessage', message);
    });

    socket.on('disconnect', () => {
        console.log('A user disconnected');
    });
});

server.listen(3000, () => {
    console.log('Server is running on port 3000');
});
