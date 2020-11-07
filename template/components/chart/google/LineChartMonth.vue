<template>
  <div>
    <GChart type="LineChart" :data="chartData" :options="chartOptions" />
  </div>
</template>
<script>
import { GChart } from "vue-google-charts";

export default {
  props: {
    chartData: []
  },
  components: {
    GChart
  },
  data: function() {
    return {
      chartData: [],
      chartOptions: {
        title: "จำนวนผู้รับบริการ/เดือน",
        titleTextStyle: { fontName: "Kanit", fontSize: "18" },

        hAxis: {
          title: "เดือน",
          textStyle: { fontName: "Kanit ", fontSize: "18" }
        },
        vAxis: {
          title: "จำนวน",
          textStyle: { fontName: "Kanit ", fontSize: "18" }
        },

        height: 400,

        colors: ["#51adcf"],
        pointsVisible: true,
        backgroundColor: "#f6f5f5",
        chartArea: {
          left: "5%",
          top: "10%",
          height: "70%",
          width: "85%"
        },
        colors: ["#19d3da", "#d2e603"]
      }
    };
  },
  mounted() {
    // console.log(this.chartData);
  }
};
</script>
