import { Chart, registerables } from 'chart.js';
Chart.register(...registerables);

export function renderPlayerComparisonChart(ctx, labels, datasets) {
    const isSmallScreen = typeof window !== 'undefined' && window.innerWidth < 640;

    new Chart(ctx, {
        type: 'radar',
        data: {
            labels: labels,
            datasets: datasets
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            elements: {
                line: {
                    borderWidth: 3
                }
            },
            scales: {
                r: {
                    beginAtZero: true,
                    pointLabels: {
                        color: '#EAD63D',
                        font: { size: isSmallScreen ? 11 : 14 }
                    },
                    angleLines: {
                        color: '#50482D'
                    },
                    grid: {
                        color: '#50482D'
                    },
                    ticks: {
                        display: false
                    }
                }
            },
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            // Show the raw stat value from the custom rawData array
                            let label = context.dataset.label || '';
                            if (label) {
                                label += ': ';
                            }
                            // Use the index to get the raw value
                            if (context.dataset.rawData && context.dataIndex !== undefined) {
                                label += context.dataset.rawData[context.dataIndex];
                            } else {
                                label += context.raw;
                            }
                            return label;
                        }
                    }
                }
            }
        }
    });
}

// Expose globally for inline script usage
window.renderPlayerComparisonChart = renderPlayerComparisonChart;
