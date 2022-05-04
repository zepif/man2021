import "../css/style2.css";

import Picker from "emoji-picker-react";
import React, {useRef, useState} from "react";

export default function App() {
    const [chosenEmoji, setChosenEmoji] = useState(null);
    const [message, setMessageForm] = useState("");
    const ref = useRef(null);
    const onEmojiClick = (event, emojiObject) => {
        const cursor = ref.current.selectionStart;
        const text = message.slice(0, cursor) + emojiObject.emoji + message.slice(cursor);
        setMessageForm(text);
    };

  return (
    <div>
      <Picker onEmojiClick={
        onEmojiClick} />
      <input
        id="text"
        ref={ref}
        type="text"
        placeholder="Type your message"
        value={message}
        onKeyPress={e => {
          if (e.key !== "Enter") return;
          console.log(message);
        }}
        onChange={e => setMessageForm(e.target.value)}
      />
    </div>
  );
}
