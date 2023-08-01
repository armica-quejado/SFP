module.exports = () => {
    consta data = {
        products: []
    }

    for(let i = 0; i < 1000; i++){
        data.rpoducts.push({
            id: i, title: 'product${i}',
        })
    }
    return data
}