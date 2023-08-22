import java.io.*;
import javax.servlet.http.*;

public class C4f_001 extends HttpServlet {
	String name;
	protected void doGet(HttpServletRequest req, HttpServletResponse res)
		throws IOException {
	 printWriter out = res.getWriter();
	 out.print("<body>name=");
	 try {
		 name = req.getParameter("name");
		 Thread.sleep(3000);
		 out.print(escapeHTML(name));
	 } catch (InterruptedException e) {
	   out.println(e);
	 }
	 out.println("</body>");
	 out.close();
	}
}
