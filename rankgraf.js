// Gráfico de PCs
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['PC Gaming Xtreme', 'PC Creator Pro', 'PC Gamer Elite'],
        datasets: [{
            label: 'Puntuación de Rendimiento',
            data: [95, 80, 50],
            backgroundColor: [
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)',
                'rgba(255, 159, 64, 0.6)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Puntuación'
                }
            }
        },
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Rendimiento de PCs'
            }
        }
    }
});

// Gráfico de Gráficas
const ctx1 = document.getElementById('myChart1').getContext('2d');
const myChart1 = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: ['NVIDIA RTX 3080', 'AMD RX 6800 XT', 'NVIDIA RTX 3070'],
        datasets: [{
            label: 'Puntuación de Rendimiento',
            data: [10, 60, 85],
            backgroundColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(0, 128, 0, 0.6)',
                'rgba(0, 255, 255, 0.6)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(0, 128, 0, 0.6)',
                'rgba(0, 255, 255, 0.6)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Puntuación'
                }
            }
        },
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Rendimiento de Gráficas'
            }
        }
    }
});

// Gráfico de Laptops
const ctx2 = document.getElementById('myChart2').getContext('2d');
const myChart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['Laptop Gamer Xtreme', 'Laptop Creativa Pro', 'Laptop Oficina Elite'],
        datasets: [{
            label: 'Puntuación de Rendimiento',
            data: [40, 88, 50],
            backgroundColor: [
                'rgba(255, 215, 0, 0.6)',
                'rgba(50, 205, 50, 0.6)',
                'rgba(255, 0, 255, 0.6)'
            ],
            borderColor: [
                'rgba(255, 215, 0, 0.6)',
                'rgba(50, 205, 50, 0.6)',
                'rgba(255, 0, 255, 0.6)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Puntuación'
                }
            }
        },
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Rendimiento de Laptops'
            }
        }
    }
});