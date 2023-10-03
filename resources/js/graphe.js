// Importez Chart.js
import Chart from 'chart.js/auto';

// Récupérez les données de revenus totaux (remplacez-les par vos valeurs réelles)
const totalRevenue = {{ $totalRevenue }};

// Obtenez la référence du canvas dans votre vue
const ctx = document.getElementById('revenueChart').getContext('2d');

// Créez un graphique à barres
const revenueChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Revenu total'],
        datasets: [{
            label: 'Revenu total',
            data: [totalRevenue],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
