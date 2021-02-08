<script>
import { Bar } from "vue-chartjs";
import axios from "axios";
import Chart from "chart.js";
//เรียกใช้ plugin labels
import ChartJSPluginDatalabels from "chartjs-plugin-datalabels";

export default {
  extends: Bar,
  props: {
    // borderColor: null,
    // ipddetail: null,
    // ipdall_chart_bar_name: null,
    // ipdall_chart_bar_sum: null
    ipdall_bed_label: null,
    ipdall_bed_data: null
  },
  data() {
    return {
      chartcolor: null,
      chartbodercolor: null,
      chartData: {
        labels: [],
        datasets: [
          {
            label: "เปอร์เซ็นต์",

            borderWidth: 3,
            backgroundColor: [],
            borderColor: [],
            pointBorderColor: "",
            data: [],
            rough: {
              roughness: 2,

              bowing: 2
            }
          }
        ]
      },

      options: {
        title: {
          display: true,
          text: "ประเภทเตียง",
          fontSize: "20",
          fontFamily: "Kanit, sans-serif"
        },

        scales: {
          yAxes: [
            {
              ticks: {
                beginAtZero: true,
                fontSize: 18,
                fontFamily: "Kanit, sans-serif",
                fontStyle: "italic"
              },
              gridLines: {
                display: true
              }
            }
          ],
          xAxes: [
            {
              gridLines: {
                display: false
              },
              ticks: {
                beginAtZero: true,
                fontSize: 18,
                fontFamily: "Kanit, sans-serif",
                fontStyle: "italic"
              }
            }
          ]
        },

        legend: {
          display: true
        },
        responsive: true,
        maintainAspectRatio: false,

        plugins: {
          datalabels: {
            color: "#ffffff",

            font: {
              weight: "bold",
              size: 16
            },
            // align: function(context) {
            //   var index = context.dataIndex;
            //   var value = context.dataset.data[index];
            //   var invert = Math.abs(value) <= 1;
            //   return value < 1 ? "end" : "start";
            // },

            align: "end",
            anchor: "end",
            Clamping: "end",
            backgroundColor: "#ed6663",

            borderRadius: 4,
            borderWidth: 1
          }
        }
      }
    };
    color: "";
  },
  mounted() {
    this.changetitlecolor();

    // this.barcolor();
    //เรียกใช้ plugin labels
    this.addPlugin(ChartJSPluginDatalabels);

    //renderchart
    this.renderChart(this.chartData, this.options);
  },
  methods: {
    // barcolor() {
    //   this.ipdall_bed_data.forEach(function(number) {
    //     if (number > 0 && number < 50) {
    //       this.color = "#d35d6e";
    //       alert(this.color);
    //     }
    //   });
    // },
    changetitlecolor() {
      this.chartbodercolor = "#ed6663";

      //สี chart

      this.chartData.datasets[0].backgroundColor = "#8fc0a9";

      this.chartData.datasets[0].borderColor = this.chartbodercolor;
      //ค่า+label
      this.chartData.labels = this.ipdall_bed_label;
      this.chartData.datasets[0].data = this.ipdall_bed_data;
      //สี label

      this.options.plugins.datalabels.borderColor = this.chartbodercolor;
    }
  }
};
</script>
