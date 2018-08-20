var phoneInput = new Cleave('.phone-number-input', {
    phone: true,
    phoneRegionCode: 'BR'
});

var cpfInput = new Cleave('.cpf-input', {
    delimiters: ['.', '.', '-'],
    blocks: [3, 3, 3, 2],
    uppercase: true
});

var birthInput = new Cleave('.birth-input', {
    date: true,
    datePattern: ['d', 'm', 'Y']
});
