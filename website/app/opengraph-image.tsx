import { ImageResponse } from "next/og";

export const alt = "Maryam Ghabel — Clinical Psychologist";
export const size = {
  width: 1200,
  height: 630,
};
export const contentType = "image/png";

export default function OpenGraphImage() {
  return new ImageResponse(
    (
      <div
        style={{
          width: "100%",
          height: "100%",
          background: "#1B2845",
          display: "flex",
          flexDirection: "column",
          alignItems: "center",
          justifyContent: "center",
          position: "relative",
        }}
      >
        {/* Background decorative circle */}
        <div
          style={{
            position: "absolute",
            top: "-200px",
            right: "-200px",
            width: "600px",
            height: "600px",
            borderRadius: "50%",
            background:
              "radial-gradient(circle, rgba(201,168,124,0.25) 0%, transparent 70%)",
          }}
        />

        {/* Brand emblem - SVG */}
        <div
          style={{
            display: "flex",
            alignItems: "center",
            justifyContent: "center",
            marginBottom: "30px",
          }}
        >
          <svg width="100" height="100" viewBox="0 0 100 100" fill="none">
            <circle
              cx="50"
              cy="50"
              r="45"
              stroke="#C9A87C"
              strokeWidth="2"
            />
            <circle cx="50" cy="50" r="12" fill="#C9A87C" />
            <path
              d="M 15 50 Q 50 25 85 50"
              stroke="#E8DCC8"
              strokeWidth="1"
              fill="none"
              opacity="0.6"
            />
            <path
              d="M 20 60 Q 50 40 80 60"
              stroke="#E8DCC8"
              strokeWidth="1"
              fill="none"
              opacity="0.4"
            />
            <path
              d="M 25 70 Q 50 55 75 70"
              stroke="#E8DCC8"
              strokeWidth="1"
              fill="none"
              opacity="0.25"
            />
          </svg>
        </div>

        {/* Main title - English to avoid font issues */}
        <h1
          style={{
            color: "#E8DCC8",
            fontSize: "72px",
            fontWeight: 700,
            margin: "0",
            textAlign: "center",
            letterSpacing: "-0.02em",
          }}
        >
          Maryam Ghabel
        </h1>

        {/* Subtitle */}
        <p
          style={{
            color: "#C9A87C",
            fontSize: "36px",
            marginTop: "16px",
            marginBottom: "0",
            textAlign: "center",
            letterSpacing: "0.05em",
          }}
        >
          Clinical Psychologist
        </p>

        {/* Divider */}
        <div
          style={{
            width: "60px",
            height: "2px",
            background: "#C9A87C",
            marginTop: "40px",
            marginBottom: "40px",
            opacity: "0.7",
          }}
        />

        {/* Tagline - English */}
        <p
          style={{
            color: "#8A9AB0",
            fontSize: "24px",
            marginTop: "0",
            marginBottom: "0",
            textAlign: "center",
            maxWidth: "800px",
          }}
        >
          Deep psychology for successful adults
        </p>

        {/* Bottom info */}
        <div
          style={{
            position: "absolute",
            bottom: "40px",
            display: "flex",
            gap: "30px",
            color: "#5A6680",
            fontSize: "16px",
          }}
        >
          <span>maryamghabel.ir</span>
          <span>•</span>
          <span>7+ years clinical experience</span>
        </div>
      </div>
    ),
    {
      ...size,
    }
  );
}
