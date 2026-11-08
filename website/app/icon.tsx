import { ImageResponse } from "next/og";

export const size = {
  width: 32,
  height: 32,
};
export const contentType = "image/png";

export default function Icon() {
  return new ImageResponse(
    (
      <div
        style={{
          width: "100%",
          height: "100%",
          background: "#1B2845",
          display: "flex",
          alignItems: "center",
          justifyContent: "center",
          borderRadius: "8px",
        }}
      >
        <svg width="22" height="22" viewBox="0 0 22 22" fill="none">
          <circle
            cx="11"
            cy="11"
            r="9"
            stroke="#C9A87C"
            strokeWidth="1.5"
          />
          <circle cx="11" cy="11" r="3.5" fill="#C9A87C" />
          <path
            d="M 3 11 Q 11 6 19 11"
            stroke="#E8DCC8"
            strokeWidth="0.8"
            fill="none"
            opacity="0.5"
          />
          <path
            d="M 4 13 Q 11 9 18 13"
            stroke="#E8DCC8"
            strokeWidth="0.8"
            fill="none"
            opacity="0.3"
          />
        </svg>
      </div>
    ),
    {
      ...size,
    }
  );
}
