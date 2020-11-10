<template>
  <div class="app">
    <apexcharts
      type="bar"
      height="350"
      :options="chartOptions"
      :series="series"
    ></apexcharts>
  </div>
</template>

<script>
import VueApexCharts from "vue-apexcharts";
export default {
  components: {
    apexcharts: VueApexCharts
  },
  props: {
    ipdall_day_name: null,
    ipdall_day_ipdall: null
  },
  data() {
    return {
      series: [
        {
          name: "จำนวนที่ Admit",
          data: []
        }
      ],
      chartOptions: {
        chart: {
          type: "bar",
          height: 350
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: "55%",
            endingShape: "rounded"
          }
        },
        dataLabels: {
          enabled: true,
          style: {
            fontSize: "18px",
            fontFamily: "Kanit, sans-serif"
          }
        },
        stroke: {
          show: true,
          width: 2,
          colors: ["transparent"]
        },

        xaxis: {
          categories: [],
          labels: {
            rotate: -45,
            style: {
              fontSize: "16px",
              fontFamily: "Kanit, sans-serif"
            }
          }
        },
        yaxis: {
          title: {
            text: "จำนวน",
            style: {
              fontSize: "18px",
              fontFamily: "Kanit, sans-serif"
            }
          },
          labels: {
            style: {
              fontSize: "16px",
              fontFamily: "Kanit, sans-serif"
            }
          }
        },
        fill: {
          type: "gradient",
          gradient: {
            shade: "light",
            type: "horizontal",
            shadeIntensity: 0.25,
            gradientToColors: undefined,
            inverseColors: true,
            opacityFrom: 0.85,
            opacityTo: 0.85,
            stops: [50, 0, 100]
          }
        },
        tooltip: {
          enabled: true,
          offsetX: 0,
          style: {
            fontSize: "16px",
            fontFamily: "Kanit, sans-serif"
          }
        },
        colors: ["#4ecdc4"]
      }
    };
  },
  beforeMount() {
    this.series[0].data = this.ipdall_day_ipdall;
    this.chartOptions.xaxis.categories = this.ipdall_day_name;
  }
};
</script>
