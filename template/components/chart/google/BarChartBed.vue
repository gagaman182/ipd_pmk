<template>
  <div>
    <GChart type="ColumnChart" :data="chartData" :options="chartOptions" />
  </div>
</template>
<script>
import { GChart } from "vue-google-charts";

export default {
  props: {
    // chartData: []
  },
  components: {
    GChart
  },
  data: function() {
    return {
      chartData: [
        ["Year", "Asia"],
        ["2012", 900],
        ["2013", 1000],
        ["2014", 1170],
        ["2015", 1250],
        ["2016", 1530]
      ],
      chartOptions: {
        title: "เปอร์เซ็นต์ แอ็ดมิท/เตียง",
        titleTextStyle: { fontName: "Kanit", fontSize: "18" },

        height: 890,

        colors: ["#51adcf"],
        // pointsVisible: true,
        // backgroundColor: "#f6f5f5",
        chartArea: {
          left: "5%",
          top: "10%",
          height: "70%",
          width: "80%"
        }
      }
    };
  },
  mounted() {
    // console.log(this.chartData);
  }
};
</script>
