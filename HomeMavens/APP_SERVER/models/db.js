var mongoose = require("mongoose");

// Connection string from mongodb
var dbURI = "mongodb+srv://RandeepSingh_13:Basant417@cluster1.dfj19.mongodb.net/HouseDB?retryWrites=true&w=majority";

mongoose.connect(dbURI,  { dbName: 'HouseDB', useNewUrlParser: true, useUnifiedTopology: true});

mongoose.connect(dbURI);

mongoose.connection.on('connected', function(){
    console.log('Mongoose connected to Database');
});

mongoose.connection.on('error', function(){
    console.log('Mongoose Connection error');
});

mongoose.connection.on('disconnected', function(){
    console.log('Mongoose Disconnected');
});

require('./mobile');