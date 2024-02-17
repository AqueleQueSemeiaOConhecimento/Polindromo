// criar servidor
const express = require('express');
const os = require('os');

// iniciar servidor e colocar uma porta
const app = express();
const port = 3333;

// metodo get do servidor onde retorna o hostname
app.get('/', (req, res) => {

    const hostname = os.hostname();
    res.json({ hostname });

})


// caminho servidor
app.listen(port, () => {
    console.log(`Server is running on http://localhost:${port}`);
});